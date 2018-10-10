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
  <li><a href="#" style='background:#efefef;'>Unread Assignments <span class="badge">x</span></a></li>
  
  <li><a href="#" class="active" style='background:#efefef;'>Total Balance Fee Owed <span class="badge"><?php
  
  
  $qry = mssql_query("select SUM(CAST(expected_amount as bigint) -CAST(amountpaid as bigint)) as total
from historic where  oldb='$ss' "); 
$row = mssql_fetch_assoc($qry); 
 echo $sass4=$row['total'];
 ?></span></a></li>
  
  
  <li><a href="#" class="active" style='background:#efefef;'>Total Male<span class="badge"><?php 
  
  $qry = mssql_query("select count(*) as total
from courses where  db1='$ss'  and sex='M'or sex='Male'"); 
$row = mssql_fetch_assoc($qry); 
 echo $savee4=$row['total'];
?></span></a></li>
  
  <li><a href="#" class="active" style='background:#efefef;'>Total Female<span class="badge"><?php 
  
  $qry = mssql_query("select count(*) as total
from courses where  db1='$ss'  and sex='F'or sex='Female'"); 
$row = mssql_fetch_assoc($qry); 
 echo $savs4=$row['total'];
?></span></a></li>
  <li><a href="#" class="active" style='background:#efefef;'>Bank Transaction<span class="badge">x</span></a></li>
</ul>

