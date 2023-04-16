<!DOCTYPE html>
<html>
  <head>
    <title>My Lecturers</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/lecturer_style.css">
    <link rel="shortcut icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHcAAAB3CAMAAAAO5y+4AAAAY1BMVEUAAAD////5+fk5OTnx8fFISEgwMDAWFhY8PDz19fVSUlIlJSUoKCj8/PwYGBgtLS0fHx8PDw/JyckICAi1tbWAgIBXV1fW1tbq6uqfn5+8vLzf399tbW2ZmZl6enpkZGSKioqhDu08AAACZklEQVRoge2Y63LqIBCAAUGCCQhesR6Pff+nLLCJJo1tTaDOmTn7/fGSmXwsLOwmhCAIgiAIgiAIgiAIgiD/AW656OO21WKEK6u0+92ZK9ZHiSVlI1YFpYeTFHQEC94x5bx/jpQZwV7sPRzDzbh8sVfu0s2CV+lIt4p9rx5QxCs8BMEtWUdsd6Hn5Yu6R7MtoP3bTR63n670vXUB04ALfcrb/Jr2pd52kn3rbQLrF3gPoD2u2nz2nHP2+94aMnlDFrS3fx96i+bVG0RLSPWjV/TLQpVXF66wtvYJb9Hz6pzuIch0r8jRQi6fyAzvMsebwuXp69d5pUQ11uocLazuXobz1oppXpXjhWROPQWUnkderQSMqaqbO1mbit+GD9oHXhbXF9a+2P693qxKMc00ZT7U3/BJiZQmFDpJaGy1oL/yDXFGlvBebsG2U828EUopTYmRxpCtjV7FxCLqfbM11pQou5uUmCxGm2xKxX4jDEMTaZwlLnp1ilcr5mtnw2AKwCGbbbMOeRJyRzEe4g0BgteZe7zgNbUj103kkOPVMdx43knn4v7VzNs4z4yGlXQ2uENehYBjvEyH9ZVS9rf8TNZpH3aV/ue6kOrge8qI9xyvGIz8OS+cmP5zWzKJ1Qwv1JF9jnaO91atX+mtCTT3OqsETvca0GbO8nTvEbS7TO1Ub8smVzvPm5lTc71v+do53ksB7Xde9uj5l56zqsEz3gGtV58KvcKZ5GW7qoz1eS8VS3UqZg3euID+7m37nOG7K37e7W2J5uaOSw9Y3S94J9f+2bEsa0QQBEEQBEEQBEEQBEH+UT4Azowe46AyuSUAAAAASUVORK5CYII=" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>
  <body>
  <?php
  include_once '../components/nav_bar.php';
  $links = [
      ['url' => '../index.php', 'label' => 'Home'],
      ['url' => 'story.php', 'label' => 'My Story'],
      ['url' => '#', 'label' => 'My Lecturers'],
  ];
  navbar($links);
  ?>
    
    <main>
      <h1 style="text-align: center;">My Favorite lecturers</h1>
    <div class="lecturers">
      <?php  include_once '../components/lecturer.php';
    $lecturers = [
      ['name' => 'Dr. BABATUNDE AYINLA', 'image' => 'https://sci.ui.edu.ng/sites/default/files/ayinla_site5.jpg', 'about' => 'A computer scientist that specialises in Software Engineering, CyberSecurity & Machine Learning. A very commited lecturer who is seen as a father figure to his students. He pushes his students beyond their limits to make them scale up with assignment deadlines that would threating ones existence. \'You just have to know how to code\', he says. His royal majesty sir!', 'email' => 'ayinlab@gmail.com', 'number' => '+2348035777159'],

      ['name' => 'Dr. SAKPERE ADERONKE', 'image' => 'https://media.licdn.com/dms/image/C5603AQFwljDJHSMk2A/profile-displayphoto-shrink_200_200/0/1653427871379?e=1687392000&v=beta&t=XL4irkgn81PyLWUl5l1eGuCpIu4N7EUqSjenPQP2USI', 'about' => 'Dr Sakpere received both BSc and MSc degrees in Computer Science from the Unilorin, Nigeria. She holds a PhD in Computer Science from the University of Cape Town, South Africa. She is an Oracle PL/SQL Developer Certified Associate. She is a faculty member at the Unibadan with over 10 years of experience in lecturing, research and mentoring. Her Excellency ma!', 'email' => 'ronkeofe@yahoo.com', 'number' => '+2348103439166'],

      ['name' => 'Dr. ONIFADE OLUFADE', 'image' => 'https://sci.ui.edu.ng/sites/default/files/onifade_0.jpg', 'about' => 'He is Strong and passionate in lecturing with a Certificate in Graduate Teaching Certificate focused in Computer Science from Massachusetts Institute of Technology. His research focus is into Pattern Recognition, Computer Vision, IR and Data Analytic. I have not seen one like him, he is vast in many fields(MAT, STA, CSC). So smart a human. His highness sir!', 'email' => 'fadowilly@yahoo.com', 'number' => '+2348074010558'],

      ['name' => 'Dr. PRAISE ADEYEMO', 'image' => 'https://sci.ui.edu.ng/sites/default/files/Dr.Adeyemo_0_1.jpg', 'about' => 'Dr. PRAISE ADEYEMO is an Experienced Lecturer in the department of mathematics, univerity of ibadan whose core field is  Algebraic Geometry and Topology, he is very smart and reserved, his teaching methodology would never want you to miss his class. He has my respect!', 'email' => 'ph.adeyemo@ui.edu.ng', 'number' => '+234806288896'],

      ['name' => 'Dr. ONASANYA BABATUNDE', 'image' => 'https://sci.ui.edu.ng/sites/default/files/Onasanya%20Photo.jpg', 'about' => 'Dr. ONASANYA BABATUNDE is an Experienced Lecturer in the department of mathematics, univerity of ibadan whose core field is Algebraic Fuzzy Mathematics and Hyperstructures. He is highly disciplined and commited, he breaks down his teachings in such a way that anybody could understand. You just have to love him', 'email' => 'babtu2001@yahoo.com', 'number' => '2348035566361'],
      
  ];
  lecturer_details($lecturers);
?>
     
      </div>

    </main>
    
    <?php include_once '../components/footer.php'; ?>
  </body>
</html>
