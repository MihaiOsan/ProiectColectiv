<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Create an event</title>
<link rel="stylesheet" type="text/css" href="styleAll.css">
	
    
</head>
<body>
<?php include 'navbar.php' ?>
<div class="container">
   <div class="card" class="panel panel-primary" >
      <div class="panel-body" style="border-color:black">
        <h1 style="padding:10px 50px 0 40px">Create an event</h1>
         <div class="row">
            <div style="padding: 40px 40px 0 40px">
               <div class="form-group">
                  <label class="control-label">Event name</label>
                  <input type="text" class="form-control" name="eventName" id="eventName">
               </div>
            </div>
            <div style="padding: 0 40px 0 40px">
               <div class="form-group">
                  <label class="control-label">Event type</label>
                  <input type="text" class="form-control" name="type" id="type">
               </div>
            </div>
         </div>
         <div class="row">
            <div style="padding: 0 40px 0 40px">
               <div class="form-group">
                  <label class="control-label">Location</label>
                  <input type="text" class="form-control" name="location" id="location">
               </div>
            </div>
            <div style="padding: 0 40px 0 40px" class="col-md-6">
               <div class="form-group">
                  <label class="control-label">Event date</label>
                  <div class='input-group date' id='datetimepicker1'>
                     <input type='text' class="form-control" />
                     <span class="input-group-addon">
                     <span class="glyphicon glyphicon-calendar"></span>
                     </span>
                  </div>
               </div>
            </div>
            <div style="padding: 0 40px 0 40px" class="col-md-6">
               <div class="form-group">
                  <label class="control-label">Days until the event goes public</label>
                  <input type="text" class="form-control" name="daysPublic" id="daysPublic">
               </div>
            </div>
         </div>
         <input type="submit" class="button" style="width:100%;" class="btn btn-primary" value="Submit" name="createEvent">
      </div>
   </div>
</div>
		
</body>
</html>