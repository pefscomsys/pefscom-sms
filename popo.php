 <div class="alert alert-dismissible alert-info">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Well done!</strong> You Can Manage online and desktop from a click <a href="#" class="alert-link"></a>.
</div>
</blockquote>
<ul class="nav nav-pills" style='margin-top:-25px;margin-left:25px;'>
  <li class="active"><a href="#">Home <span class="badge">42</span></a></li>
  <li><a href="#">Total Student(s) <span class="badge"><?php 
  
  $qry = mssql_query("select CAST(year as text) as total
from rush where  roll='1'  "); 
$row = mssql_fetch_assoc($qry); 
 $ss=$row['total'];

  
  
  $qry = mssql_query("select count(*) as total
from courses where  db1='$ss'  "); 
$row = mssql_fetch_assoc($qry); 
 echo $savee4=$row['total'];

 ?></span></a></li>
  <li><a href="#" class="active" style='background:#efefef;'>Total Balance Fee Owed <span class="badge"><?php
  
  
  $qry = mssql_query("select SUM(CAST(expected_amount as bigint) -CAST(amountpaid as bigint)) as total
from historic where  oldb='$ss' "); 
$row = mssql_fetch_assoc($qry); 
 echo $sass4=$row['total'];
 
 ?></span></a></li>
  <li><a href="#" class="active" style='background:#efefef;'>Today Fee Collected <span class="badge"><?php
  
  
  $qry = mssql_query("select SUM(CAST(amountpaid as bigint)) as total
from historic where  oldb='$ss' "); 
$row = mssql_fetch_assoc($qry); 
 echo $sass4=$row['total'];
 ?></span></a></li>
  
  
  
  <li><a href="#" class="active" style='background:#efefef;'>Bank Transaction<span class="badge"></span></a></li>
</ul>