<br/>
<style>
.title-border-line {
  margin-bottom: 23px;
  border-bottom: 1px solid #CCC;
}
.form-horizontal .control-label{
  text-align: left;
}table td, table th{
border:none;
  text-align: left;
}
.student-title{
   text-align: left;
}
input{
padding:0px
}
</style>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
			</br>
                <?php if($this->session->flashdata('msg')!=NULL) { ?>
								<div class="alert col-md-12 alert-success display-none" style="display: block;">
									<a data-dismiss="alert" href="#" aria-hidden="true" class="close">�</a>
									<?php  echo $this->session->flashdata('msg');?>
								</div>
								<?php } ?>
	<form action="<?php echo base_url(); ?>site/authentic_coordinator" class="form-horizontal" method="post"enctype="multipart/form-data" name="student_login"><!--<?php// echo base_url();?>BTech-Student-Preview
 <input type="hidden" name="done" value="done"/> -->
  <div class="row" id="printerdiv">
  	<div class="form-group">
<label class="col-sm-6 control-label"><h4 class="view-all-size title-border-line">Your Login Details</h4></label>
</div>
<div style="float:left; width:100%" class="print-table">
<table width="100%" align="center" cellpadding="0" cellspacing="0" border="0">

<tr>
<td width="30%" align="right" class="student-title">E-mail ID</td>
<td width="70%" align="left"  class="student-details"><?php echo $student_details['email'];?></td>
</tr>
<tr>
<td width="30%" align="right" class="student-title">Enter password</td>
<td width="70%" align="left"  class="student-details"><input type="password" required  name="password" id="password"><input type="hidden" name="userid" id="password" value="<?php echo $student_details['id'];?>"><span>password should 6-12 characters</span></td>
</tr>
<tr>
<td width="30%" align="right" class="student-title">Profile Photo<br/>
	<img src="http://ideativedigital.com/outreach/assests/images/profile.png" alt="" class="fixed-img" /><!--<img src="..." alt="..." class="img-circle">-->
</td>

<style>
	.fixed-img{width:80px; height:80px; border-radius: 45px; }
	
</style>


<td width="70%" align="left"  class="student-details">Upload your photo<input type="file" required   name="profile_image" id="profile_image"></td>
</tr>
</table>
<?php

$ses_data=$this->session->userdata('user_details');

if($ses_data['user_type']==2){
?>


			<div class="form-group">
<label class="col-sm-6 control-label"><h4 class="view-all-size title-border-line">Your Outreach Target: </h4></label>
</div>
<table width="100%" align="center" cellpadding="0" cellspacing="0" border="0">

<tr>
<td width="30%" align="right" class="student-title">Workshops to conduct</td>
<td width="70%" align="left"  class="student-details"><?php echo $ses_data['workshop']; ?></td>
</tr>
<tr>
<td width="30%" align="right" class="student-title">Participants to cover</td>
<td width="70%" align="left"  class="student-details"><?php echo $ses_data['participants']; ?></td>
</tr>
<tr>
<td width="30%" align="right" class="student-title">Experiments to conduct</td>
<td width="70%" align="left"  class="student-details"><?php echo $ses_data['experiments']; ?></td>
</tr>
</table>


<?php
}
?>

<input type="submit" name="Login" value="Login" style="padding: 7px;">
</form>
				<div class="clearfix">
				</div>
			</div>
						












			<!-- .col-md-9 -->
			<!-- .col-md-3 -->
		</div>
		<!-- .row -->
	</div>
	</div>
	</div>
	</div>