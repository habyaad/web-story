<style>
  form {
  display: flex;
  flex-direction: column;
  max-width: 500px;
}
.col-md-4 {
  flex-basis: calc(30% - 15px);
  margin-bottom: 30px;
}

label {
  margin-bottom: 5px;
}

input,
textarea {
  padding: 10px;
  margin-bottom: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
}

button[type="submit"] {
  background-color: #008CBA;
  color: #fff;
  border: none;
  border-radius: 5px;
  padding: 10px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
  background-color: #006080;
}

textarea {
  height: 50px;
}
footer {
    background-color: #333;
    color: #fff;
    padding: 40px 0;
  }
  footer .container{
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }
  footer .row{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: flex-start;
  }
  .social-icons li,
.contact-info li {
  font-size: 1.2rem;
  margin-bottom: 10px;
}

.social-icons li {
  display: inline-block;
  margin-right: 10px;
}

.social-icons li:last-child {
  margin-right: 0;
}

.fa {
  font-size: 1.5rem;
  margin-right: 5px;
}
ul {
  list-style: none;
  margin: 0;
  padding: 0;
}




@media screen and (max-width: 768px) {
  form {
    max-width: 100%;
  }
  .col-md-4 {
    flex-basis: 100%;
    margin-bottom: 30px;
  }
}
</style>
<script src="https://cdn.jsdelivr.net/phpmailer/phpmailer/5.2.0/phpmailer.min.js"></script>
<script src="https://cdn.jsdelivr.net/phpmailer/phpmailer/5.2.0/class.smtp.php"></script>

<footer>
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <h3>Ade Omotosho</h3>
              <p>The goal is to build and keep building services that would make life easier and aid simplify complex task. To cut the long story short, get in touch.</p>
              <ul class="social-icons">
                <li><a href="https://facebook.com/ade.omotosho.9" target="_blank"><i class="fab fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/adeomotosho1" target="_blank"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://instagram.com/adeomotosho1" target="_blank"><i class="fab fa-instagram"></i></a></li>
              </ul>
            </div>
            <div class="col-md-4">
              <h3>Get in touch</h3>
              <ul class="contact-info">
                <li><i class="fa fa-phone"></i> Phone: +234-909-963-7474</li>
                <li><i class="fa fa-envelope"></i> Email: somotosho508@stu.ui.edu.ng</li>
              </ul>
            </div>
            <div class="col-md-4">
              <h3>Send me a message!</h3>
              <form action="#" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
                <button type="submit">Send</button>
              </form>
            </div>
  
          </div>
        </div>
      </footer>