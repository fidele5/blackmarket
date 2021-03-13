@extends("layouts.app")
@section('content')
@include('admin.breadcumb')
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="widget-content searchable-container list">
                    <div class="card card-body">
                        <div class="row">
                                <div class="col-md-4">
                                    <form>
                                        <input type="text" class="form-control product-search" id="input-search" placeholder="Search Contacts...">
                                    </form>
                                </div>
                                <div class="col-md-8 text-right d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                                        <a href="javascript:void(0)" id="btn-add-contact" class="btn btn-info"><i class="mdi mdi-account-multiple-plus font-16 mr-1"></i> Add Contact</a>
                                </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="addContactModal" tabindex="-1" role="dialog" aria-labelledby="addContactModalTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Contact</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="add-contact-box">
                                        <div class="add-contact-content">
                                            <form id="addContactModalTitle">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="contact-name">
                                                            <input type="text" id="c-name" class="form-control" placeholder="Name">
                                                            <span class="validation-text"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="contact-email">
                                                            <input type="text" id="c-email" class="form-control" placeholder="Email">
                                                            <span class="validation-text"></span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="contact-occupation">
                                                            <input type="text" id="c-occupation" class="form-control" placeholder="Occupation">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="contact-phone">
                                                            <input type="text" id="c-phone" class="form-control" placeholder="Phone">
                                                            <span class="validation-text"></span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="contact-location">
                                                            <input type="text" id="c-location" class="form-control" placeholder="Location">
                                                        </div>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button id="btn-add" class="btn btn-success">Add</button>
                                    <button id="btn-edit" class="btn btn-success">Save</button>
                                    <button class="btn btn-danger" data-dismiss="modal"> Discard</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-body">
                        <div class="table-responsive">
                            <table class="table table-striped search-table v-middle">
                                <thead class="header-item">
                                    <th>
                                        <div class="n-chk align-self-center text-center">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="contact-check-all">
                                                <label class="custom-control-label" for="contact-check-all"></label>
                                                <span class="new-control-indicator"></span>
                                            </div>
                                        </div>
                                    </th>
                                    <th class="text-dark font-weight-bold">Name</th>
                                    <th class="text-dark font-weight-bold">Email</th>
                                    <th class="text-dark font-weight-bold">Location</th>
                                    <th class="text-dark font-weight-bold">Phone</th>
                                    <th class="text-center">
                                        <div class="action-btn">
                                            <a href="javascript:void(0)" class="delete-multiple text-danger"><i class="fas fa-trash font-16 font-medium"></i> Delete Row</a>
                                        </div>
                                    </th>
                                </thead>
                                <tbody>
                                    <!-- row -->
                                    <tr class="search-items">
                                        <td>
                                            <div class="n-chk align-self-center text-center">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input contact-chkbox" id="checkbox1">
                                                    <label class="custom-control-label" for="checkbox1"></label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="/admin/assets/images/users/1.jpg" alt="avatar" class="rounded-circle" width="35">
                                                <div class="ml-2">
                                                    <div class="user-meta-info">
                                                        <h5 class="user-name mb-0" data-name="Emma Adams">Emma Adams</h5>
                                                        <span class="user-work text-muted" data-occupation="Web Developer">Web Developer</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="usr-email-addr" data-email="adams@mail.com"><a href="https://www.wrappixel.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="721316131f01321f131b1e5c111d1f">[email&#160;protected]</a></span>
                                        </td>
                                        <td>
                                            <span class="usr-location" data-location="Boston, USA">Boston, USA</span>
                                        </td>
                                        <td>
                                            <span class="usr-ph-no" data-phone="+1 (070) 123-4567">+91 (070) 123-4567</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="action-btn">
                                                <a href="javascript:void(0)" class="text-info edit"><i class="mdi mdi-account-edit font-20"></i></a>
                                                <a href="javascript:void(0)" class="text-dark delete ml-2"><i class="mdi mdi-delete font-20"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- /.row -->
                                    <!-- row -->
                                    <tr class="search-items">
                                        <td>
                                            <div class="n-chk align-self-center text-center">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input contact-chkbox" id="checkbox2">
                                                    <label class="custom-control-label" for="checkbox2"></label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="/admin/assets/images/users/2.jpg" alt="avatar" class="rounded-circle" width="35">
                                                <div class="ml-2">
                                                    <div class="user-meta-info">
                                                        <h5 class="user-name mb-0" data-name="Olivia Allen">Olivia Allen</h5>
                                                        <span class="user-work text-muted" data-occupation="Web Designer">Web Designer</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="usr-email-addr" data-email="allen@mail.com"><a href="https://www.wrappixel.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2e4f42424b406e434f4742004d4143">[email&#160;protected]</a></span>
                                        </td>
                                        <td>
                                            <span class="usr-location" data-location="Sydney, Australia">Sydney, Australia</span>
                                        </td>
                                        <td>
                                            <span class="usr-ph-no" data-phone="+91 (125) 450-1500">+91 (125) 450-1500</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="action-btn">
                                                <a href="javascript:void(0)" class="text-info edit"><i class="mdi mdi-account-edit font-20"></i></a>
                                                <a href="javascript:void(0)" class="text-dark delete ml-2"><i class="mdi mdi-delete font-20"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- /.row -->
                                    <!-- row -->
                                    <tr class="search-items">
                                        <td>
                                            <div class="n-chk align-self-center text-center">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input contact-chkbox" id="checkbox3">
                                                    <label class="custom-control-label" for="checkbox3"></label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="/admin/assets/images/users/3.jpg" alt="avatar" class="rounded-circle" width="35">
                                                <div class="ml-2">
                                                    <div class="user-meta-info">
                                                        <h5 class="user-name mb-0" data-name="Isabella Anderson">Isabella Anderson</h5>
                                                        <span class="user-work text-muted" data-occupation="UX/UI Designer">UX/UI Designer</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="usr-email-addr" data-email="anderson@mail.com"><a href="https://www.wrappixel.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="670609030215140809270a060e0b4904080a">[email&#160;protected]</a></span>
                                        </td>
                                        <td>
                                            <span class="usr-location" data-location="Miami, USA">Miami, USA</span>
                                        </td>
                                        <td>
                                            <span class="usr-ph-no" data-phone="+91 (100) 154-1254">+91 (100) 154-1254</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="action-btn">
                                                <a href="javascript:void(0)" class="text-info edit"><i class="mdi mdi-account-edit font-20"></i></a>
                                                <a href="javascript:void(0)" class="text-dark delete ml-2"><i class="mdi mdi-delete font-20"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- /.row -->
                                     <!-- row -->
                                    <tr class="search-items">
                                        <td>
                                            <div class="n-chk align-self-center text-center">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input contact-chkbox" id="checkbox4">
                                                    <label class="custom-control-label" for="checkbox4"></label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="/admin/assets/images/users/4.jpg" alt="avatar" class="rounded-circle" width="35">
                                                <div class="ml-2">
                                                    <div class="user-meta-info">
                                                        <h5 class="user-name mb-0" data-name="Amelia Armstrong">Amelia Armstrong</h5>
                                                        <span class="user-work text-muted" data-occupation="Ethical Hacker">Ethical Hacker</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="usr-email-addr" data-email="armstrong@mail.com"><a href="https://www.wrappixel.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="99f8ebf4eaedebf6f7fed9f4f8f0f5b7faf6f4">[email&#160;protected]</a></span>
                                        </td>
                                        <td>
                                            <span class="usr-location" data-location="Tokyo, Japan">Tokyo, Japan</span>
                                        </td>
                                        <td>
                                            <span class="usr-ph-no" data-phone="+91 (154) 199- 1540">+91 (154) 199- 1540</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="action-btn">
                                                <a href="javascript:void(0)" class="text-info edit"><i class="mdi mdi-account-edit font-20"></i></a>
                                                <a href="javascript:void(0)" class="text-dark delete ml-2"><i class="mdi mdi-delete font-20"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- /.row -->
                                    <!-- row -->
                                    <tr class="search-items">
                                        <td>
                                            <div class="n-chk align-self-center text-center">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input contact-chkbox" id="checkbox5">
                                                    <label class="custom-control-label" for="checkbox5"></label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="/admin/assets/images/users/5.jpg" alt="avatar" class="rounded-circle" width="35">
                                                <div class="ml-2">
                                                    <div class="user-meta-info">
                                                        <h5 class="user-name mb-0" data-name="Emily Atkinson">Emily Atkinson</h5>
                                                        <span class="user-work text-muted" data-occupation="Web developer">Web developer</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="usr-email-addr" data-email="atkinson@mail.com"><a href="https://www.wrappixel.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="78190c1311160b17163815191114561b1715">[email&#160;protected]</a></span>
                                        </td>
                                        <td>
                                            <span class="usr-location" data-location="Edinburgh, UK">Edinburgh, UK</span>
                                        </td>
                                        <td>
                                            <span class="usr-ph-no" data-phone="+91 (900) 150- 1500">+91 (900) 150- 1500</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="action-btn">
                                                <a href="javascript:void(0)" class="text-info edit"><i class="mdi mdi-account-edit font-20"></i></a>
                                                <a href="javascript:void(0)" class="text-dark delete ml-2"><i class="mdi mdi-delete font-20"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- /.row -->
                                    <!-- row -->
                                    <tr class="search-items">
                                        <td>
                                            <div class="n-chk align-self-center text-center">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input contact-chkbox" id="checkbox6">
                                                    <label class="custom-control-label" for="checkbox6"></label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="/admin/assets/images/users/6.jpg" alt="avatar" class="rounded-circle" width="35">
                                                <div class="ml-2">
                                                    <div class="user-meta-info">
                                                        <h5 class="user-name mb-0" data-name="Sofia Bailey">Sofia Bailey</h5>
                                                        <span class="user-work text-muted" data-occupation="UX/UI Designer">UX/UI Designer</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="usr-email-addr" data-email="bailey@mail.com"><a href="https://www.wrappixel.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="aecccfc7c2cbd7eec3cfc7c280cdc1c3">[email&#160;protected]</a></span>
                                        </td>
                                        <td>
                                            <span class="usr-location" data-location="New York, USA">New York, USA</span>
                                        </td>
                                        <td>
                                            <span class="usr-ph-no" data-phone="+91 (001) 160- 1845">+91 (001) 160- 1845</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="action-btn">
                                                <a href="javascript:void(0)" class="text-info edit"><i class="mdi mdi-account-edit font-20"></i></a>
                                                <a href="javascript:void(0)" class="text-dark delete ml-2"><i class="mdi mdi-delete font-20"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- /.row -->
                                    <!-- row -->
                                    <tr class="search-items">
                                        <td>
                                            <div class="n-chk align-self-center text-center">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input contact-chkbox" id="checkbox7">
                                                    <label class="custom-control-label" for="checkbox7"></label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="/admin/assets/images/users/7.jpg" alt="avatar" class="rounded-circle" width="35">
                                                <div class="ml-2">
                                                    <div class="user-meta-info">
                                                        <h5 class="user-name mb-0" data-name="Victoria Sharma">Victoria Sharma</h5>
                                                        <span class="user-work text-muted" data-occupation="Project Manager"">Project Manager"</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="usr-email-addr" data-email="sharma@mail.com"><a href="https://www.wrappixel.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4d3e252c3f202c0d202c2421632e2220">[email&#160;protected]</a></span>
                                        </td>
                                        <td>
                                            <span class="usr-location" data-location="Miami, USA">Miami, USA</span>
                                        </td>
                                        <td>
                                            <span class="usr-ph-no" data-phone="+91 (110) 180- 1600">+91 (110) 180- 1600</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="action-btn">
                                                <a href="javascript:void(0)" class="text-info edit"><i class="mdi mdi-account-edit font-20"></i></a>
                                                <a href="javascript:void(0)" class="text-dark delete ml-2"><i class="mdi mdi-delete font-20"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- /.row -->
                                    <!-- row -->
                                    <tr class="search-items">
                                        <td>
                                            <div class="n-chk align-self-center text-center">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input contact-chkbox" id="checkbox8">
                                                    <label class="custom-control-label" for="checkbox8"></label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="/admin/assets/images/users/8.jpg" alt="avatar" class="rounded-circle" width="35">
                                                <div class="ml-2">
                                                    <div class="user-meta-info">
                                                        <h5 class="user-name mb-0" data-name="Penelope Baker">Penelope Baker</h5>
                                                        <span class="user-work text-muted" data-occupation="Web Developer"">Web Developer"</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="usr-email-addr" data-email="baker@mail.com"><a href="https://www.wrappixel.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d2b0b3b9b7a092bfb3bbbefcb1bdbf">[email&#160;protected]</a></span>
                                        </td>
                                        <td>
                                            <span class="usr-location" data-location="Edinburgh, UK">Edinburgh, UK</span>
                                        </td>
                                        <td>
                                            <span class="usr-ph-no" data-phone="+91 (405) 483- 4512">+91 (405) 483- 4512</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="action-btn">
                                                <a href="javascript:void(0)" class="text-info edit"><i class="mdi mdi-account-edit font-20"></i></a>
                                                <a href="javascript:void(0)" class="text-dark delete ml-2"><i class="mdi mdi-delete font-20"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- /.row -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- Share Modal -->
            <div class="modal fade" id="Sharemodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><i class="mdi mdi-auto-fix mr-2"></i>
                                    Share With</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="input-group mb-3">
                                    <button type="button" class="btn btn-info"><i
                                            class="ti-user text-white"></i></button>
                                    <input type="text" class="form-control" placeholder="Enter Name Here"
                                        aria-label="Username">
                                </div>
                                <div class="row">
                                    <div class="col-3 text-center">
                                        <a href="#Whatsapp" class="text-success">
                                            <i class="display-6 mdi mdi-whatsapp"></i><br><span
                                                class="text-muted">Whatsapp</span>
                                        </a>
                                    </div>
                                    <div class="col-3 text-center">
                                        <a href="#Facebook" class="text-info">
                                            <i class="display-6 mdi mdi-facebook"></i><br><span
                                                class="text-muted">Facebook</span>
                                        </a>
                                    </div>
                                    <div class="col-3 text-center">
                                        <a href="#Instagram" class="text-danger">
                                            <i class="display-6 mdi mdi-instagram"></i><br><span
                                                class="text-muted">Instagram</span>
                                        </a>
                                    </div>
                                    <div class="col-3 text-center">
                                        <a href="#Skype" class="text-cyan">
                                            <i class="display-6 mdi mdi-skype"></i><br><span
                                                class="text-muted">Skype</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i>
                                    Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Create Modal -->
            <div class="modal fade" id="createmodel" tabindex="-1" role="dialog" aria-labelledby="createModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">
                                <h5 class="modal-title" id="createModalLabel"><i class="ti-marker-alt mr-2"></i> Create
                                    New Contact</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="input-group mb-3">
                                    <button type="button" class="btn btn-info"><i
                                            class="ti-user text-white"></i></button>
                                    <input type="text" class="form-control" placeholder="Enter Name Here"
                                        aria-label="name">
                                </div>
                                <div class="input-group mb-3">
                                    <button type="button" class="btn btn-info"><i
                                            class="ti-more text-white"></i></button>
                                    <input type="text" class="form-control" placeholder="Enter Mobile Number Here"
                                        aria-label="no">
                                </div>
                                <div class="input-group mb-3">
                                    <button type="button" class="btn btn-info"><i
                                            class="ti-import text-white"></i></button>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose Image</label>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success"><i class="ti-save"></i> Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
@endsection