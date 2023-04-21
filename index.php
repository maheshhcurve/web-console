<?php
session_start();
require 'dbcon.php';
?>

 <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.css">

        <title>Console</title>
</head>   
 <table id="table">
    <tr >
      <!--<th>Date</th>-->
      <th id="adi">ad_format</th>
      <th>template</th>
      <th>average_ctr</th>
      <th>dimensions</th>
      <th>duration</th>
      <th>functionality</th>
      <th>reviews</th>
      <th>description</th>
      <th>demo_link</th>
    <th>meta_keywords</th>
    <th>Action</th>
    </tr>
  
</table>


<script>




 fetch('https://publisherplex.io/webpresentation/console/api.php')
  .then(response => response.json())
  .then(data => {
    const tableBody = document.getElementById("table");
    for (let i = 0; i < data.length; i++) {
        console.log(data.length);
      const tr = document.createElement("tr");
      const ad_format = document.createElement("td");
      const template = document.createElement("td");
      const average_ctr = document.createElement("td");
      const dimensions = document.createElement("td");
      const duration = document.createElement("td");
      const functionality = document.createElement("td");
      const reviews = document.createElement("td");
      const description = document.createElement("td");
      const demo_link = document.createElement("td");
      const meta_keywords = document.createElement("td");

      ad_format.textContent = data[i].ad_format;
      template.textContent = data[i].template;
      average_ctr.textContent = data[i].average_ctr;
      dimensions.textContent = data[i].dimensions;
      duration.textContent = data[i].duration;
      functionality.textContent = data[i].functionality;
      reviews.textContent = data[i].reviews;
      description.textContent = data[i].description;
      demo_link.textContent = data[i].demo_link;
      meta_keywords.textContent = data[i].meta_keywords;

      tr.appendChild(ad_format);
      tr.appendChild(template);
      tr.appendChild(average_ctr);
      tr.appendChild(dimensions); 
      tr.appendChild(duration);
      tr.appendChild(functionality);
         tr.appendChild(reviews);
      tr.appendChild(description);
      tr.appendChild(demo_link); 
      tr.appendChild(meta_keywords); 

      tableBody.appendChild(tr);
    }
  });

         
 
</script>
<!--<?php require('footer.php'); ?>-->
