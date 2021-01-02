<style>
	

		.profile_pic_min{
			display: block;
			height: 300px;
			background-color: black;
			width: 100%;

		}
		.photo{
			background-color: red;
		    height: 180px;
		    width: 180px;
		    position: absolute;
		    top: 6px;
		    left: 43%;
		    border-radius: 50%;
		    }
		.background_IMG{
			width: 100%;
			height: 100%;
		}
		.Border_table{
			border-bottom: 0.5px solid black;
			

		}
		.Border_table_2{
			
			border-bottom: 0.5px solid black;
		}
		.edit_btn{
		        position: absolute;
                right: 1.5%;
		}
	</style>
	<script>
	var btn = document.getElementById("myBtn").addEventListener("click", Runedit);
	function Runedit(){
	    
	}
	</script>
	<div class="container" style="background: #dbdcdc;padding: 3%;border-radius: 10px;margin-top: 15px;">
  	<div class="row"> 
  		<div class="col-md-12" style="margin-bottom: 10px">
  		    
  		    
  		
	<div class="profile_pic_min">
	<img class="background_IMG"src="/Dist/Profile/Background_Img/defult.jpg" alt="">
	<img class="photo"src="Dist/Profile/Profile_Pic/img_avatar.png" alt="">
    </div>
    </div>
	<div class="col-md-12" style="margin-bottom: 10px">
  		    <button type="button" class="btn btn-secondary btn-sm edit_btn">Edit</button>
  	
		<table class="table table-striped ">
  
              <tbody>
                   <tr>
                  <td class="Border_table">ID</td>
                  <td class="Border_table_2"><?php echo $User['id']?></td>
                </tr>
                <tr>
                  <td class="Border_table">Name</td>
                  <td class="Border_table_2"><?php echo $User['full_name']?></td>
                </tr>
                <tr>
                  <td class="Border_table">User Name</td>
                  <td class="Border_table_2"><?php echo $User['user_name']?></td>
                </tr>
                <tr>
                  <td class="Border_table">E-mail</td>
                  <td class="Border_table_2"><?php echo $User['email']?></td>
                </tr>
                <tr>
                  <td class="Border_table">Phone Number</td>
                  <td class="Border_table_2"><?php echo $User['User_Phone']?></td>
                </tr>
                <tr>
                  <td class="Border_table">Gender</td>
                  <td class="Border_table_2"><?php echo $User['User_Gender']?></td>
                </tr>
                <tr>
                  <td class="Border_table">City</td>
                  <td class="Border_table_2"><?php echo $User['City']?></td>
                </tr>
                <tr>
                  <td class="Border_table">State</td>
                  <td class="Border_table_2"><?php echo $User['State']?></td>
                </tr>
                <tr>
                  <td class="Border_table">Zip Code</td>
                  <td class="Border_table_2"><?php echo $User['User_Zip']?></td>
                </tr>
                <tr>
                  <td class="Border_table">Permanent Address</td>
                  <td class="Border_table_2"><?php echo $User['Perm_Addr']?></td>
                </tr>
                <tr>
                  <td class="Border_table">Present Address</td>
                  <td class="Border_table_2"><?php echo $User['Pres_Addr']?></td>
                </tr>
                <tr>
                  <td class="Border_table">Website</td>
                  <td class="Border_table_2"><?php echo $User['Web']?></td>
                </tr>
                <tr>
                  <td class="Border_table">Join Date</td>
                  <td class="Border_table_2"><?php echo $User['Join_Date']?></td>
                </tr>
                
                
                <tr>
                  
                  
              </tbody>
            </table>

		
	</div>
	
  		



	</div>
	</div>
	
  	
  		
  		
  		
  		
  		
  		
  		
  		
  		