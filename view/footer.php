





 <footer class="container-fluid footer  ft   col-md-12 col-sm-6 col-xs-3">
    <div class="container ">
      <div class="row">
        <h2 id="contact">contactez-nous !</h2>
        <hr class="separator">
        <div class="col-md-6 col-md-offset-3">
          <div class="well well-sm">
            <form class="form-horizontal" action="index.php?controller=contact&action=created" method="post">
              <fieldset>


                <!-- Name input-->
                <div class="form-group">
                  <label class="col-md-3 control-label" for="name">Nom</label>
                  <div class="col-md-9">
                    <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                  </div>
                </div>

                <!-- Email input-->
                <div class="form-group">
                  <label class="col-md-3 control-label" for="email"> E-mail</label>
                  <div class="col-md-9">
                    <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
                  </div>
                </div>

                <!-- Message body -->
                <div class="form-group">
                  <label class="col-md-3 control-label" for="message">Votre message</label>
                  <div class="col-md-9">
                    <textarea class="form-control" id="message" name="message"
                      placeholder="Please enter your message here..." rows="5"></textarea>
                  </div>
                </div>

                <!-- Form actions -->
                <div class="form-group">
                  <div class="col-md-12 text-right">
                    <button type="submit" clas s="btn btn-primary btn-lg">Envoyer</button>
                  </div>
                </div>
              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>
  </footer>