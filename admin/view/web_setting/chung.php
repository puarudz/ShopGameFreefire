<?php 
defined('KUNKEYPR') or exit('Restricted Access');

$logo = $kun->settings('logo');
$banner = $kun->settings('banner');
$title = $kun->settings('title');
$admin = $kun->settings('admin');
$color = $kun->settings('color');
$thongbao = $kun->settings('thongbao');
$napthe = $kun->settings('napthe');

if(isset($_POST['submit'])) {

	$_title = json_encode(array('title'=> $_POST['web_title'], 'name'=>$_POST['web_name']));
	$_logo = json_encode(array('url'=> $_POST['web_logo'], 'height'=>$_POST['web_logo_x'], 'width'=>$_POST['web_logo_y']));
	$_banner = json_encode(array('url'=> $_POST['web_banner']));
	$_color = json_encode(array('color'=> $_POST['web_color']));
	$_admin = json_encode(array('name'=> $_POST['admin_name'], 'phone'=>$_POST['admin_phone'], 'facebook'=>$_POST['admin_facebook'], 'youtube'=> $_POST['admin_youtube']));
	$_thongbao = json_encode(array('thongbao'=> $_POST['web_thongbao'], 'time'=> $_POST['web_thongbao_time']));

    $_napthe = json_encode(array('kieunap'=> $_POST['web_napthe'], 'api_key'=> $_POST['api_key']));



	mysqli_query($kun->connect_db(), "UPDATE `settings` SET `value` = '".mysqli_escape_string($kun->connect_db(), $_title)."' WHERE `key` = 'web_title'");
	mysqli_query($kun->connect_db(), "UPDATE `settings` SET `value` = '".mysqli_escape_string($kun->connect_db(), $_logo)."' WHERE `key` = 'web_logo'");
	mysqli_query($kun->connect_db(), "UPDATE `settings` SET `value` = '".mysqli_escape_string($kun->connect_db(), $_banner)."' WHERE `key` = 'web_banner'");
	mysqli_query($kun->connect_db(), "UPDATE `settings` SET `value` = '".mysqli_escape_string($kun->connect_db(), $_color)."' WHERE `key` = 'web_color'");
	mysqli_query($kun->connect_db(), "UPDATE `settings` SET `value` = '".mysqli_escape_string($kun->connect_db(), $_admin)."' WHERE `key` = 'web_admin'");
	mysqli_query($kun->connect_db(), "UPDATE `settings` SET `value` = '".mysqli_escape_string($kun->connect_db(), $_thongbao)."' WHERE `key` = 'web_thongbao'");
    mysqli_query($kun->connect_db(), "UPDATE `settings` SET `value` = '".mysqli_escape_string($kun->connect_db(), $_napthe)."' WHERE `key` = 'web_napthe'");

        echo '<div class="alert alert-success fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">??</a><strong>Success!</strong> Ch???nh s???a th??nh c??ng</div>';
		echo '<meta http-equiv="refresh" content="1;URL=" /> ';
}


?>



<div class="row clearfix">





                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <b>C??I ?????T WEBSITE</b>
                            </h2>
                        </div>
                        <div class="body">
                           <form method="post" action="">



                        <div class="col-md-6 col-sm-12 col-lg-6">

                                <label for="tieude">Ti??u ????? Website:</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input name="web_title" type="text" class="form-control" value="<?php echo $title['title'];?>">
                                    </div>
                                </div>

                            </div>

                        <div class="col-md-6 col-sm-12 col-lg-6">
                                <label for="tenweb">T??n Website:</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input name="web_name" type="text" class="form-control" value="<?php echo $title['name'];?>">
                                    </div>
                                </div>
                        </div>



                        <div class="col-md-6 col-sm-12 col-lg-6">
                                <label for="tenweb">Url Logo:</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input name="web_logo" type="text" id="logo" class="form-control" value="<?php echo $logo['url'];?>">
                                    </div>
                                </div>
                        </div>

                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <div class="col-md-6 col-sm-12 col-lg-6">
                                    <label for="tenweb">Chi???u Cao:</label>
                                    <div class="form-group">
                                        <div class="form-line focused">
                                            <input name="web_logo_x" type="number" id="url_logo" class="form-control" value="<?php echo $logo['height'];?>">
                                        </div>
                                    </div>
                            </div>

                            <div class="col-md-6 col-sm-12 col-lg-6">
                                    <label for="tenweb">Chi???u R???ng:</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input name="web_logo_y" type="number" id="url_logo" class="form-control" value="<?php echo $logo['width'];?>">
                                        </div>
                                    </div>
                            </div>                        
                        </div>



                        <div class="col-md-6 col-sm-12 col-lg-6">
                                <label for="banner">H??nh ???nh Banner:</label>
                                <div class="form-group">
                                    <div class="form-line focused">
                                        <input name="web_banner" type="text" class="form-control" value="<?php echo $banner['url'];?>">
                                    </div>
                                    <small>N??n S??? D???ng Website <a href="https://imgur.com/">https://imgur.com/</a> ????? Up ???nh L???y Link D??n V??o Nh?? !</small>
                                </div>
                        </div>


                        <div class="col-md-6 col-sm-12 col-lg-6">
                        <div class="col-md-6 col-sm-12 col-lg-6">             
                                <label for="hovaten">M??u Ch??? ?????:</label>
                                    <div class="input-group colorpicker colorpicker-element">
                                        <div class="form-line">
                                            <input id="color" type="color" onchange="javascript:document.getElementById('chosen-color').value = document.getElementById('color').value;" class="form-control" value="<?php echo $color['color'];?>">
                                        </div>
                                        <span class="input-group-addon">
                                            <i style="background-color: rgb(121, 227, 237);"></i>
                                        </span>
                                    </div>
                        </div>

                        <div class="col-md-6 col-sm-12 col-lg-6">             
                                <label for="hovaten">M??u Ch??? ????? (M?? M??u):</label>
                                    <div class="input-group colorpicker colorpicker-element">
                                        <div class="form-line">
                                            <input name="web_color" value="<?php echo $color['color'];?>" type="text" id="chosen-color" class="form-control">
                                        </div>
                                    </div>
                        </div>
                    </div>


                        <div class="col-md-6 col-sm-12 col-lg-3">             
                                <label for="hovaten">H??? T??n Admin:</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input name="admin_name" type="text" class="form-control" value="<?php echo $admin['name'];?>">
                                    </div>
                                    <small>????? Ng?????i V???n H??nh Ph??n Bi???t, Kh??ng Show Ra Ngo??i Tuy???t ?????i Kh??ng ???????c X??a D??ng N??y</small>
                                  </div>  
                         </div>





                        <div class="col-md-6 col-sm-12 col-lg-3">   
                                <label for="sdt">Hotline:</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input name="admin_phone" type="number" class="form-control" value="<?php echo $admin['phone'];?>">
                                    </div>
                                </div>
                        </div>

                        <div class="col-md-6 col-sm-12 col-lg-3">   
                                <label for="linkfb">Link Facebook:</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input name="admin_facebook" type="text" class="form-control" value="<?php echo $admin['facebook'];?>">
                                    </div>
                                </div>
                        </div>

                        <div class="col-md-6 col-sm-12 col-lg-3">   
                                 <label for="linkytb">Link YouTuBe:</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input name="admin_youtube" type="text" class="form-control" value="<?php echo $admin['youtube'];?>">
                                    </div>
                                </div>
                        </div>


                                <label for="thongbao">Th??ng B??o:</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea class="form-control" name="web_thongbao" rows="8"><?php echo htmlentities($thongbao['thongbao']);?></textarea>
									</div>
									<small id="fileHelp" class="form-text text-muted">Th??ng b??o hi???n th??? ngo??i trang ch???.</small>
								</div>



                        <div class="col-md-4 col-sm-4 col-lg-4">   
                                 <label for="linkytb">Th??ng B??o Hi???n L???i Sau:(gi??y; 86400 = 1 ng??y)</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input name="web_thongbao_time" type="number" class="form-control" value="<?php echo $thongbao['time'];?>">
                                    </div>
                                </div>
                        </div>

                        <div class="col-md-4 col-sm-4 col-lg-4">   
                                 <label for="linkytb">Ki???u N???p Th???</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select name="web_napthe" class="form-control show-tick" tabindex="-98">
                                            <option value="<?php echo $napthe['kieunap'];?>"><?php if($napthe['kieunap'] == 'napcham') echo 'N???p Ch???m'; else echo 'N???p T??? ?????ng';?></option>
                                            <option value="naptudong">N???p T??? ?????ng</option>
                                            <option value="napcham">N???p Ch???m</option>
                                        </select>
                                    </div>
                                </div>
                        </div>

                        <div class="col-md-4 col-sm-4 col-lg-4">   
                                 <label for="linkytb">API GACHTHE.VN (L???y B??n Gachthe.Vn)</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input name="api_key" type="text" class="form-control" value="<?php echo $napthe['api_key'];?>">
                                    </div>
                                </div>
                        </div> 


								  <button type="submit" name="submit" class="btn bg-indigo">S???A C??I ?????T</button>
								</form>

                    </div>
                </div>
            </div>
        </div>