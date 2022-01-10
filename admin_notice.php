   <html>

   <h2>Notice upload section</h2>

   <form action="notice_upload.php" method="post" enctype="multipart/form-data" class="form-inline">

         <div class="form-group mb-2">
         </div>
         <div class="form-group mx-sm-3 mb-2">
               <b>
                     Select a file for notice:
               </b> <input style="padding: 15px;" type="file" name="file" id="file" class="form-control">
         </div>
         <b> Date of notice publish: </b> <input type="date" name="date" id="date">
         <b>
               <br>
            Please write the Description about the notice below:  
         </b>
          <br><textarea type="text" name="description" rows="3" cols="50" value="description">
</textarea>
<br>
         <button class="btn_btn-primary_mb-2" type="submit" name="btn_notice">Upload</button><br>
   </form>

   </html>