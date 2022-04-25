<center><h1>database history</h1>
<style>
     body {
  
  background-color: white;
} 
.center
{
    text-align:center;
}
.button {
  background-color: #557a95;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 10px;
  margin: 2px 2px;
  cursor: pointer;
}
.button1 {
  background-color: #d1e8e2;
  border: none;
  color: black;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 10px;
  margin: 2px 2px;
  cursor: pointer;
}


/* table css */
table { 
	width: 750px; 
	border-collapse: collapse; 
	margin:50px auto;
	}

/* Zebra striping */
tr:nth-of-type(odd) { 
	background: #eee; 
	}

th { 
	background: #659dbd; 
	color: white; 
	font-weight: bold; 
	}

td, th { 
	padding: 10px; 
	border: 1px solid #ccc; 
	text-align: left; 
	font-size: 18px;
	}

/* 
Max width before this PARTICULAR table gets nasty
This query will take effect for any screen smaller than 760px
and also iPads specifically.
*/
@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

	table { 
	  	width: 100%; 
	}

	/* Force table to not be like tables anymore */
	table, thead, tbody, th, td, tr { 
		display: block; 
	}
	
	/* Hide table headers (but not display: none;, for accessibility) */
	thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	
	tr { border: 1px solid #ccc; }
	
	td { 
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
	}

	td:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
		/* Label the data */
		content: attr(data-column);

		color: #000;
		font-weight: bold;
	}

}
</style>

<table>
  <thead>
    <tr>
      <th class="center">id</th>
      <th class="center">firstname</th>
      <th class="center">Last Name</th>
      <th class="center">age</th>
      <th class="center">email</th>
      <th class="center">password</th>
      <th class="center">delete</th>
      <th class="center">update</th>
    </tr>
  </thead>

@foreach ($members as $item)
<tr>
    <td data-column="id" class="center">{{$item['id']}}</td>
    <td data-column="firstname" class="center">{{$item['firstname']}}</td>
    <td data-column="lastname" class="center">{{$item['lastname']}}</td>
    <td data-column="age" class="center">{{$item['age']}}</td>
    <td data-column="email" class="center">{{$item['email']}}</td>    
    <td data-column="password" class="center">{{$item['password']}}</td>
    <td><a href={{"delete/".$item['id']}} class="button">Delete</a></td>
    <td><a href={{"update/".$item['id']}} class="button">update</a></td>
   
</tr>

@endforeach     
</table>
<br>
<center>
<a href="/" class="button1">go back</a>
</center>
</center>