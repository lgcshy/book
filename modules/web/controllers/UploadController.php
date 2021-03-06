<?php

namespace app\modules\web\controllers;

use app\common\services\UrlService;
use app\common\services\UtilService;
use app\models\Images;
use app\modules\web\controllers\common\BaseController;
use app\common\services\UploadService;

class UploadController extends BaseController{

	protected  $allow_file = ["gif","jpg","png","jpeg"];

	/**
	 * 单张图片保存了
	 */
	public function actionPic(){
		$uid = $this->post('uid',0);
		if( !$uid ){
			$uid = $this->getUid();
		}

		$bucket = $this->post('bucket','');
		$type = $this->post('type');
		$call_back_target = 'window.parent.upload';

		if( !$uid ){
			return "<script type='text/javascript'>{$call_back_target}.error('系统繁忙请稍后再试');</script>";
		}

		if(!$_FILES || !isset($_FILES['pic'])){
			return "<script type='text/javascript'>{$call_back_target}.error('没有选择文件');</script>";
		}

		$file_name = $_FILES['pic']['name'];

		$tmp_file_extend = explode(".", $file_name);
		if(!in_array( strtolower( end( $tmp_file_extend ) ),$this->allow_file) ){
			return "<script type='text/javascript'>{$call_back_target}.error('请上传图片文件,jpg,png,jpeg,gif');</script>";
		}

		$ret = UploadService::uploadByFile( $_FILES['pic']['name'],$_FILES['pic']['tmp_name'],$bucket );
		if( !$ret ){
			return "<script type='text/javascript'>{$call_back_target}.error('".UploadService::getLastErrorMsg()."');</script>";
		}
		return "<script type='text/javascript'>{$call_back_target}.success('{$ret['path']}','$type');</script>";
	}

    public function actionUeditor(){
		$action = $this->get("action");
		$config_path = UtilService::getRootPath()."/web/plugins/ueditor/upload_config.json";
		$config = json_decode(preg_replace("/\/\*[\s\S]+?\*\//", "", file_get_contents($config_path) ), true);
		switch( $action ){
			case 'config':
				echo  json_encode($config);
				break;
				/* 上传图片 */
			case 'uploadimage':
				/* 上传涂鸦 */
			case 'uploadscrawl':
				/* 上传视频 */
			case 'uploadvideo':
				/* 上传文件 */
			case 'uploadfile':
				$this->uploadUeditorImage();
				break;
			case 'listimage':
				$this->listUeditorImage();
				break;
		}
    }

	private function uploadUeditorImage(){
		$up_target = $_FILES["upfile"];
		if ( $up_target["error"] > 0 ){
			return $this->retUeditor( "上传失败!error:". $up_target["error"] );
		}

		if( !is_uploaded_file($up_target['tmp_name']) ){
			return $this->retUeditor( "非法上传文件~~" );
		}

		$filename = $up_target["name"];
		$ret = UploadService::uploadByFile($filename,$up_target['tmp_name'],"book");

		if( !$ret ){
			return $this->retUeditor( UploadService::getLastErrorMsg() );
		}

		if( isset($ret['code']) && $ret['code'] == 205 ){
			return $this->retUeditor( "此图片已经上传过了~~" );
		}

		return $this->retUeditor( "SUCCESS",UrlService::buildWwwUrl( $ret['prefix'].$ret['path'] ) );
	}

	private function listUeditorImage(){
		$start = intval( $this->get("start",0) );
		$page_size = intval( $this->get("size",20) );
		$bucket = "book";
		$query = Images::find()->where([ 'bucket' => $bucket ]);
		if( $start ){
			$query->andWhere(['<',"id",$start]);
		}
		$list = $query->orderBy("id desc")->limit($page_size)->all();
		$images = [];
		$last_id = 0;
		if( $list ){
			foreach( $list as $_item){
				$images[] = [
					'url' => UrlService::buildPicUrl( $bucket,$_item['file_key'] ),
					'mtime' => strtotime( $_item['created_time'] ),
					'width' => 300
				];
				$last_id = $_item['id'];
			}
		}

		header('Content-type: application/json');

		$data = [
			"state" => (count($images)> 0 )?'SUCCESS':'no match file',
			"list" => $images,
			"start" => $last_id,
			"total" => count($images)
		];
		echo  json_encode( $data );
		exit();
	}

	private function retUeditor( $state, $url = '',$title = '',$original = '',$type = '',$size = 0){

		header('Content-type: application/json');
		$data = [
			"state" => $state,
			"url" => $url,
			"title" => $title,
			"original" => $original,
			"type" => $type,
			"size" => $size,
			"width" => 200
		];
		echo  json_encode( $data );
		exit();
	}
}
