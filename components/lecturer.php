<?php
    function lecturer_details($lecturers){
        foreach ($lecturers as $lecturer) {
         
        echo "
        <div class='card-container'>
        <div class='card'>
          <div class='card-image'>
            <img src='${lecturer['image']}' alt='Lecturer Image'>
          </div>
          <div class='card-content'>
            <h2 class='card-title'>${lecturer['name']}</h2>
            <p class='card-about'>${lecturer['about']}</p>
            <div class='card-contact'>
              <div class='card-icon'><i class='fas fa-envelope'></i></div>
              <div class='card-details'><a href='mailto:${lecturer['email']}'>${lecturer['email']}</a></div>
            </div>
            <div class='card-contact'>
              <div class='card-icon'><i class='fas fa-phone'></i></div>
              <div class='card-details'><a href='tel:${lecturer['number']}'>${lecturer['number']}</a></div>
            </div>
          </div>
        </div>
      </div>
        ";
    }}
?>