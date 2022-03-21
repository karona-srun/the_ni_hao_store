<template>
  <div>
    <div class="contact">
      <div class="container">
        <div class="spec">
          <h3>Contact</h3>
          <div class="ser-t">
            <b></b>
            <span><i></i></span>
            <b class="line"></b>
          </div>
        </div>
        <div class="contact-w3">
          <div class="col-md-5 contact-right">
            <img src="images/cac.jpg" class="img-responsive" alt="" />
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2482.432383990807!2d0.028213999961443994!3d51.52362882484525!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1423469959819"
              style="border: 0"
            ></iframe>
          </div>
          <div class="col-md-7 contact-left">
            <h4>Contact Information</h4>
            <p>
              Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit
              aut fugit, sed quia consequuntur magni dolores eos qui ratione
              voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
              ipsum quia dolor sit amet, consectetur
            </p>
            <ul class="contact-list">
              <li>
                <i class="fa fa-map-marker" aria-hidden="true"></i> 756 Global
                Place, New York.
              </li>
              <li>
                <i class="fa fa-envelope" aria-hidden="true"></i
                ><a href="mailto:example@mail.com">mail@example.com</a>
              </li>
              <li>
                <i class="fa fa-phone" aria-hidden="true"></i>+123 2222 222
              </li>
            </ul>
            <div id="container">
              <!--Horizontal Tab-->
              <div
                id="parentHorizontalTab"
                style="display: block; width: 100%; margin: 0px"
              >
                <ul class="resp-tabs-list hor_1">
                  <li
                    class="resp-tab-item resp-tab-active"
                    aria-controls="tab_item-0"
                    role="tab"
                  >
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                  </li>
                  <li
                    class="resp-tab-item"
                    aria-controls="tab_item-1"
                    role="tab"
                  >
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                  </li>
                  <li
                    class="resp-tab-item"
                    aria-controls="tab_item-2"
                    role="tab"
                  >
                    <i class="fa fa-phone" aria-hidden="true"></i>
                  </li>
                </ul>
                <div class="resp-tabs-container hor_1">
                  <h2
                    class="resp-accordion resp-tab-active"
                    role="tab"
                    aria-controls="tab_item-0"
                  >
                    <span class="resp-arrow"></span>
                  </h2>
                  <div
                    class="resp-tab-content resp-tab-content-active"
                    style="display: block"
                    aria-labelledby="tab_item-0"
                  >
                    <form action="#" method="post">
                      <input
                        type="text"
                        value="Name"
                        name="Name"
                        onfocus="this.value = '';"
                        onblur="if (this.value == '') {this.value = 'Name';}"
                        required=""
                      />
                      <input
                        type="email"
                        value="Email"
                        name="Email"
                        onfocus="this.value = '';"
                        onblur="if (this.value == '') {this.value = 'Email';}"
                        required=""
                      />
                      <textarea
                        name="Message..."
                        onfocus="this.value = '';"
                        onblur="if (this.value == '') {this.value = 'Message...';}"
                        required=""
                      >Message...</textarea
                      >
                      <input type="submit" value="Submit" />
                    </form>
                  </div>
                  <h2
                    class="resp-accordion"
                    role="tab"
                    aria-controls="tab_item-1"
                  >
                    <span class="resp-arrow"></span>
                  </h2>
                  <div class="resp-tab-content" aria-labelledby="tab_item-1">
                    <div class="map-grid">
                      <h5>Our Branches</h5>
                      <ul>
                        <li>
                          <i class="fa fa-arrow-right" aria-hidden="true"></i
                          >756 Global Place, New York.
                        </li>
                        <li>
                          <i class="fa fa-arrow-right" aria-hidden="true"></i
                          >889 diamond street, USA.
                        </li>
                        <li>
                          <i class="fa fa-arrow-right" aria-hidden="true"></i
                          >756 global Place, New York.
                        </li>
                        <li>
                          <i class="fa fa-arrow-right" aria-hidden="true"></i
                          >889 diamond street, USA.
                        </li>
                      </ul>
                    </div>
                  </div>
                  <h2
                    class="resp-accordion"
                    role="tab"
                    aria-controls="tab_item-2"
                  >
                    <span class="resp-arrow"></span>
                  </h2>
                  <div class="resp-tab-content" aria-labelledby="tab_item-2">
                    <div class="map-grid">
                      <h5>Contact Me Through</h5>
                      <ul>
                        <li>Mobile No : +123 456 7890</li>
                        <li>Office No : +123 222 2222</li>
                        <li>Home No : +123 456 7890</li>
                        <li>Fax No : +123 456 7890</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "Contact",
  data() {
    return {
      //
    };
  },
  created() {},
  methods: {},
};
</script>