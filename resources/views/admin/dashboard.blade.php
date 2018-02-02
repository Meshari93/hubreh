@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        Your application's dashboard.


                    </div>
                </div>
            </div>
        </div>

              <!-- Advanced Form Example With Validation -->
  <div class="row clearfix">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="card">
              <div class="header">
                  <h2>ADVANCED FORM EXAMPLE WITH VALIDATION</h2>
                  <ul class="header-dropdown m-r--5">
                      <li class="dropdown">
                          <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                              <i class="material-icons">more_vert</i>
                          </a>
                          <ul class="dropdown-menu pull-right">
                              <li><a href="javascript:void(0);">Action</a></li>
                              <li><a href="javascript:void(0);">Another action</a></li>
                              <li><a href="javascript:void(0);">Something else here</a></li>
                          </ul>
                      </li>
                  </ul>
              </div>
              <div class="body">

                  <form id="wizard_with_validation" method="POST">
                      <h3>Account Information </h3>
                       <fieldset>
                          <div class="form-group form-float">
                              <div class="form-line">
                                  <input type="text" class="form-control" name="username"  >
                                  <label class="form-label">Username*</label>
                              </div>
                          </div>
                          <div class="form-group form-float">
                              <div class="form-line">
                                  <input type="password" class="form-control" name="password" id="password"  >
                                  <label class="form-label">Password*</label>
                              </div>
                          </div>
                          <div class="form-group form-float">
                              <div class="form-line">
                                  <input type="password" class="form-control" name="confirm"  >
                                  <label class="form-label">Confirm Password*</label>
                              </div>
                          </div>
                      </fieldset>

                      <h3>Profile Information</h3>
                      <fieldset>
                          <div class="form-group form-float">
                              <div class="form-line">
                                  <input type="text" name="name" class="form-control"  >
                                  <label class="form-label">First Name*</label>
                              </div>
                          </div>
                          <div class="form-group form-float">
                              <div class="form-line">
                                  <input type="text" name="surname" class="form-control"  >
                                  <label class="form-label">Last Name*</label>
                              </div>
                          </div>
                          <div class="form-group form-float">
                              <div class="form-line">
                                  <input type="email" name="email" class="form-control"  >
                                  <label class="form-label">Email*</label>
                              </div>
                          </div>
                          <div class="form-group form-float">
                              <div class="form-line">
                                  <textarea name="address" cols="30" rows="3" class="form-control no-resize"  ></textarea>
                                  <label class="form-label">Address*</label>
                              </div>
                          </div>
                          <div class="form-group form-float">
                              <div class="form-line">
                                  <input min="18" type="number" name="age" class="form-control"  >
                                  <label class="form-label">Age*</label>
                              </div>
                              <div class="help-info">The warning step will show up if age is less than 18</div>
                          </div>
                      </fieldset>

                      <h3>Terms & Conditions - Finish</h3>
                      <fieldset>
                          <input id="acceptTerms-2" name="acceptTerms" type="checkbox"  >
                          <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>
                      </fieldset>
                  </form>
              </div>
          </div>
      </div>
  </div>
  <!-- #END# Advanced Form Example With Validation -->
  <!-- Basic Example | Vertical Layout -->
  <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>BASIC EXAMPLE - VERTICAL LAYOUT</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="wizard_vertical">
                                <h2>First Step</h2>
                                <section>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut nulla nunc. Maecenas
                                        arcu sem, hendrerit a tempor quis, sagittis accumsan tellus. In hac habitasse platea
                                        dictumst. Donec a semper dui. Nunc eget quam libero. Nam at felis metus. Nam tellus
                                        dolor, tristique ac tempus nec, iaculis quis nisi.
                                    </p>
                                </section>

                                <h2>Second Step</h2>
                                <section>
                                    <p>
                                        Donec mi sapien, hendrerit nec egestas a, rutrum vitae dolor. Nullam venenatis diam ac
                                        ligula elementum pellentesque. In lobortis sollicitudin felis non eleifend. Morbi
                                        tristique tellus est, sed tempor elit. Morbi varius, nulla quis condimentum dictum,
                                        nisi elit condimentum magna, nec venenatis urna quam in nisi. Integer hendrerit sapien
                                        a diam adipiscing consectetur. In euismod augue ullamcorper leo dignissim quis elementum
                                        arcu porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum leo
                                        velit, blandit ac tempor nec, ultrices id diam. Donec metus lacus, rhoncus sagittis
                                        iaculis nec, malesuada a diam. Donec non pulvinar urna. Aliquam id velit lacus.
                                    </p>
                                </section>

                                <h2>Third Step</h2>
                                <section>
                                    <p>
                                        Morbi ornare tellus at elit ultrices id dignissim lorem elementum. Sed eget nisl at justo
                                        condimentum dapibus. Fusce eros justo, pellentesque non euismod ac, rutrum sed quam.
                                        Ut non mi tortor. Vestibulum eleifend varius ullamcorper. Aliquam erat volutpat.
                                        Donec diam massa, porta vel dictum sit amet, iaculis ac massa. Sed elementum dui
                                        commodo lectus sollicitudin in auctor mauris venenatis.
                                    </p>
                                </section>

                                <h2>Forth Step</h2>
                                <section>
                                    <p>

                                    </p>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Example | Vertical Layout -->

@endsection
