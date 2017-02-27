<?php
use \app\common\services\UrlService;
?>
<?php echo Yii::$app->view->renderFile("@app/modules/web/views/common/tab_account.php",[ 'current' => 'index' ]);?>
<div class="row m-t">
	<div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <div class="m-b-md">
                    <a class="btn btn-outline pull-right">编辑</a>
                    <h2>账户信息</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <img class="img-circle" src="<?=UrlService::buildWwwUrl("/images/common/qrcode.jpg");?>" width="100px" height="100px"/>
            </div>
            <div class="col-lg-9">
                <dl class="dl-horizontal">
                    <dt>姓名：</dt> <dd>16.08.2014 12:15:57</dd>
                    <dt>手机：</dt> <dd> 	10.07.2014 23:36:57 </dd>
                    <dt>Participants:</dt>
                </dl>
            </div>
        </div>
        <div class="row m-t">
            <div class="col-lg-12">
                <div class="panel blank-panel">
                    <div class="panel-heading">
                        <div class="panel-options">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#tab-1" data-toggle="tab" aria-expanded="false">会员订单</a>
                                </li>
                                <li>
                                    <a href="#tab-2" data-toggle="tab" aria-expanded="true">会员评论</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab-1">
                                <div class="feed-activity-list">
                                    <div class="feed-element">
                                        <a href="project_detail.html#" class="pull-left">
                                            <img alt="image" class="img-circle" src="img/a2.jpg">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right">2h ago</small>
                                            <strong>Mark Johnson</strong> posted message on <strong>Monica Smith</strong> site. <br>
                                            <small class="text-muted">Today 2:10 pm - 12.06.2014</small>
                                            <div class="well">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                                Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <a href="project_detail.html#" class="pull-left">
                                            <img alt="image" class="img-circle" src="img/a3.jpg">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right">2h ago</small>
                                            <strong>Janet Rosowski</strong> add 1 photo on <strong>Monica Smith</strong>. <br>
                                            <small class="text-muted">2 days ago at 8:30am</small>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <a href="project_detail.html#" class="pull-left">
                                            <img alt="image" class="img-circle" src="img/a4.jpg">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right text-navy">5h ago</small>
                                            <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                            <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                            <div class="actions">
                                                <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                                <a class="btn btn-xs btn-white"><i class="fa fa-heart"></i> Love</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <a href="project_detail.html#" class="pull-left">
                                            <img alt="image" class="img-circle" src="img/a5.jpg">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right">2h ago</small>
                                            <strong>Kim Smith</strong> posted message on <strong>Monica Smith</strong> site. <br>
                                            <small class="text-muted">Yesterday 5:20 pm - 12.06.2014</small>
                                            <div class="well">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                                Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <a href="project_detail.html#" class="pull-left">
                                            <img alt="image" class="img-circle" src="img/profile.jpg">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right">23h ago</small>
                                            <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                            <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <a href="project_detail.html#" class="pull-left">
                                            <img alt="image" class="img-circle" src="img/a7.jpg">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right">46h ago</small>
                                            <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                            <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane" id="tab-2">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Status</th>
                                        <th>Title</th>
                                        <th>Start Time</th>
                                        <th>End Time</th>
                                        <th>Comments</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <span class="label label-primary"><i class="fa fa-check"></i> Completed</span>
                                        </td>
                                        <td>
                                            Create project in webapp
                                        </td>
                                        <td>
                                            12.07.2014 10:10:1
                                        </td>
                                        <td>
                                            14.07.2014 10:16:36
                                        </td>
                                        <td>
                                            <p class="small">
                                                Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable.
                                            </p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="label label-primary"><i class="fa fa-check"></i> Accepted</span>
                                        </td>
                                        <td>
                                            Various versions
                                        </td>
                                        <td>
                                            12.07.2014 10:10:1
                                        </td>
                                        <td>
                                            14.07.2014 10:16:36
                                        </td>
                                        <td>
                                            <p class="small">
                                                Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                            </p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="label label-primary"><i class="fa fa-check"></i> Sent</span>
                                        </td>
                                        <td>
                                            There are many variations
                                        </td>
                                        <td>
                                            12.07.2014 10:10:1
                                        </td>
                                        <td>
                                            14.07.2014 10:16:36
                                        </td>
                                        <td>
                                            <p class="small">
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
                                            </p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="label label-primary"><i class="fa fa-check"></i> Reported</span>
                                        </td>
                                        <td>
                                            Latin words
                                        </td>
                                        <td>
                                            12.07.2014 10:10:1
                                        </td>
                                        <td>
                                            14.07.2014 10:16:36
                                        </td>
                                        <td>
                                            <p class="small">
                                                Latin words, combined with a handful of model sentence structures
                                            </p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="label label-primary"><i class="fa fa-check"></i> Accepted</span>
                                        </td>
                                        <td>
                                            The generated Lorem
                                        </td>
                                        <td>
                                            12.07.2014 10:10:1
                                        </td>
                                        <td>
                                            14.07.2014 10:16:36
                                        </td>
                                        <td>
                                            <p class="small">
                                                The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                                            </p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="label label-primary"><i class="fa fa-check"></i> Sent</span>
                                        </td>
                                        <td>
                                            The first line
                                        </td>
                                        <td>
                                            12.07.2014 10:10:1
                                        </td>
                                        <td>
                                            14.07.2014 10:16:36
                                        </td>
                                        <td>
                                            <p class="small">
                                                The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                                            </p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="label label-primary"><i class="fa fa-check"></i> Reported</span>
                                        </td>
                                        <td>
                                            The standard chunk
                                        </td>
                                        <td>
                                            12.07.2014 10:10:1
                                        </td>
                                        <td>
                                            14.07.2014 10:16:36
                                        </td>
                                        <td>
                                            <p class="small">
                                                The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.
                                            </p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="label label-primary"><i class="fa fa-check"></i> Completed</span>
                                        </td>
                                        <td>
                                            Lorem Ipsum is that
                                        </td>
                                        <td>
                                            12.07.2014 10:10:1
                                        </td>
                                        <td>
                                            14.07.2014 10:16:36
                                        </td>
                                        <td>
                                            <p class="small">
                                                Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable.
                                            </p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="label label-primary"><i class="fa fa-check"></i> Sent</span>
                                        </td>
                                        <td>
                                            Contrary to popular
                                        </td>
                                        <td>
                                            12.07.2014 10:10:1
                                        </td>
                                        <td>
                                            14.07.2014 10:16:36
                                        </td>
                                        <td>
                                            <p class="small">
                                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                                            </p>
                                        </td>

                                    </tr>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
