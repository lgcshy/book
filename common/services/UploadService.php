<?php
/**
 * 统一上传
 */

namespace app\common\services;


class UploadService extends  BaseService{

    protected static $allow_file_type = ["jpg","gif","bmp","jpeg","png"];//设置允许上传文件的类型

    public static function uploadByFile($filename,$filepath){
        if( !$filename ){
            return self::_err("参数文件名是必要参数~~");
        }
        if( !$filepath || !file_exists($filepath) ){
            return self::_err("请传入合法的参数filepath~~");
        }

        $date_now = date("Y-m-d H:i:s");
        $tmp_file_extend = explode(".", $filename);
        $file_type = strtolower( end($tmp_file_extend) );

        if( !in_array( $file_type ,self::$allow_file_type) ){
            return self::_err("非图片格式必须指定参数hask_key~~");
        }

		$hash_key = md5( file_get_contents( $filepath ) );

		$upload_dir_pic = UtilService::getRootPath()."/web/uploads/";
        $folder_name = date( "Ymd",strtotime($date_now) );
        $upload_dir = $upload_dir_pic.$folder_name;
        if( !file_exists($upload_dir) ){
            mkdir($upload_dir,0777);
            chmod($upload_dir,0777);
        }

        $upload_file_name = "{$folder_name}/{$hash_key}.".$file_type;

        if( is_uploaded_file($filepath) ){
            if(!move_uploaded_file($filepath,$upload_dir_pic.$upload_file_name) ){
                return self::_err("上传失败！！系统繁忙请稍后再试~~");
            }
        }else{
            file_put_contents($upload_dir_pic.$upload_file_name,file_get_contents($filepath) );
        }

        return[
            'code' => 200,
            'path' => $upload_file_name,
        ];
    }
} 