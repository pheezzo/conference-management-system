
<?php //include('sys/connect.php');
//$conf_code = $_GET['conf'];
include('sys/functions.php');
require_once('include/front_header.php');		?>
				
		
            
              
              
       
              
              
              
              
              
            
            
         
            
		</div>
	</div>
    
    
    
    <div id="contents">
		<div class="clearfix">
			<div class="sidebar">
				<div>
					<h2>Quick Links</h2>
					<ul>
						
                        <?php
            $sql = mysqli_query($connection, "
		 SELECT *
		FROM event 
		WHERE event_type = 'conference'
		ORDER BY date_created DESC 
		");
	     if ($sql)
		if (mysqli_num_rows($sql) > 0) {
			 while($row = mysqli_fetch_assoc($sql)) {
				 
				 /*$event_id = $row['event_id']; 
				 $event_code = $row['event_code'];
				 $row['title'];*/
				 
			echo" <a href='conference.php?conf=". $row['event_code'] ."'><li>
					". $row['event_name'] ."
					</p>
				</li> 
				</a>
				 ";
			 }
		} ?>
                        
					</ul>
				</div>
				<div>
					
				</div>
			</div>
			<div class="main">
            
            
			<h1>Confrences</h1>
			   			
         <ul class="news">       
         				
                 <?php
            $sql = mysqli_query($connection, "
		 SELECT *
		FROM event 
		WHERE event_type = 'conference'
		ORDER BY date_created DESC 
		");
	     if ($sql)
		if (mysqli_num_rows($sql) > 0) {
			 while($row = mysqli_fetch_assoc($sql)) {
				 
				 /*$event_id = $row['event_id']; 
				 $event_code = $row['event_code'];
				 $row['title'];*/
			echo" <li><p><a href='conference.php?conf=". $row['event_code'] ."'><strong>". $row['event_name'] ."[". $row['event_code'] ."]</strong></a></p>
					<p><strong>Date: </strong> From ".$row['event_start']." To ".$row['event_end']."</P>
					<p><strong>Discription: </strong>".$row['event_description']."</p>
					
				</li> 
				
				 ";
			 }
		} ?>
			
				
			</ul>
                
                
			
        
			</div>
		</div>
	</div>
    
    
  <?php require_once('include/front_footer.php'); ?>