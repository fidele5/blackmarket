@extends('layouts.app')
@section("content")
@include('admin.breadcumb')
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-8 col-xl-9 col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block align-items-center mb-4">
                                    <h4 class="card-title">Ventes</h4>
                                    <div class="ml-auto">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-dark" data-toggle="modal"
                                                data-target="#createmodel">
                                                Create New Contact
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="file_export" class="table table-bordered nowrap display">
                                        <thead>
                                            <tr>
                                                <th> </th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Role</th>
                                                <th>Age</th>
                                                <th>Joining date</th>
                                                <th>Salery</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customControlValidation2" required>
                                                        <label class="custom-control-label"
                                                            for="customControlValidation2"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img
                                                            src="../../assets/images/users/1.jpg" alt="user"
                                                            class="rounded-circle" width="30" /> Genelia Deshmukh</a>
                                                </td>
                                                <td><a href="https://www.wrappixel.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7116141f141d181031161c10181d5f121e1c">[email&#160;protected]</a></td>
                                                <td>+123 456 789</td>
                                                <td><span class="label label-danger">Designer</span> </td>
                                                <td>23</td>
                                                <td>12-10-2014</td>
                                                <td>$1200</td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"
                                                        data-toggle="tooltip" data-original-title="Delete"><i
                                                            class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customControlValidation3" required>
                                                        <label class="custom-control-label"
                                                            for="customControlValidation3"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img
                                                            src="../../assets/images/users/2.jpg" alt="user"
                                                            class="rounded-circle" width="30" /> Arijit Singh</a>
                                                </td>
                                                <td><a href="https://www.wrappixel.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5f3e2d3635362b1f38323e3633713c3032">[email&#160;protected]</a></td>
                                                <td>+234 456 789</td>
                                                <td><span class="label label-info">Developer</span> </td>
                                                <td>26</td>
                                                <td>10-09-2014</td>
                                                <td>$1800</td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"
                                                        data-toggle="tooltip" data-original-title="Delete"><i
                                                            class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customControlValidation4" required>
                                                        <label class="custom-control-label"
                                                            for="customControlValidation4"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img
                                                            src="../../assets/images/users/3.jpg" alt="user"
                                                            class="rounded-circle" width="30" /> Govinda jalan</a>
                                                </td>
                                                <td><a href="https://www.wrappixel.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6d0a021b0403090c2d0a000c0401430e0200">[email&#160;protected]</a></td>
                                                <td>+345 456 789</td>
                                                <td><span class="label label-success">Accountant</span></td>
                                                <td>28</td>
                                                <td>1-10-2013</td>
                                                <td>$2200</td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"
                                                        data-toggle="tooltip" data-original-title="Delete"><i
                                                            class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customControlValidation5" required>
                                                        <label class="custom-control-label"
                                                            for="customControlValidation5"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img
                                                            src="../../assets/images/users/4.jpg" alt="user"
                                                            class="rounded-circle" width="30" /> Hritik Roshan</a>
                                                </td>
                                                <td><a href="https://www.wrappixel.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6b0319021f02002b0c060a020745080406">[email&#160;protected]</a></td>
                                                <td>+456 456 789</td>
                                                <td><span class="label label-inverse">HR</span></td>
                                                <td>25</td>
                                                <td>2-10-2017</td>
                                                <td>$200</td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"
                                                        data-toggle="tooltip" data-original-title="Delete"><i
                                                            class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customControlValidation6" required>
                                                        <label class="custom-control-label"
                                                            for="customControlValidation6"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img
                                                            src="../../assets/images/users/5.jpg" alt="user"
                                                            class="rounded-circle" width="30" /> John Abraham</a>
                                                </td>
                                                <td><a href="https://www.wrappixel.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="cca6a3a4a28caba1ada5a0e2afa3a1">[email&#160;protected]</a></td>
                                                <td>+567 456 789</td>
                                                <td><span class="label label-danger">Manager</span></td>
                                                <td>23</td>
                                                <td>10-9-2015</td>
                                                <td>$1200</td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"
                                                        data-toggle="tooltip" data-original-title="Delete"><i
                                                            class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customControlValidation7" required>
                                                        <label class="custom-control-label"
                                                            for="customControlValidation7"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img
                                                            src="../../assets/images/users/6.jpg" alt="user"
                                                            class="rounded-circle" width="30" /> Pawandeep kumar</a>
                                                </td>
                                                <td><a href="https://www.wrappixel.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5a2a3b2d3b343e3f3f2a1a3d373b333674393537">[email&#160;protected]</a></td>
                                                <td>+678 456 789</td>
                                                <td><span class="label label-warning">Chairman</span></td>
                                                <td>29</td>
                                                <td>10-5-2013</td>
                                                <td>$1500</td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"
                                                        data-toggle="tooltip" data-original-title="Delete"><i
                                                            class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customControlValidation8" required>
                                                        <label class="custom-control-label"
                                                            for="customControlValidation8"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img
                                                            src="../../assets/images/users/7.jpg" alt="user"
                                                            class="rounded-circle" width="30" /> Ritesh Deshmukh</a>
                                                </td>
                                                <td><a href="https://www.wrappixel.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="85f7ecf1e0f6edc5e2e8e4ece9abe6eae8">[email&#160;protected]</a></td>
                                                <td>+123 456 789</td>
                                                <td><span class="label label-danger">Designer</span></td>
                                                <td>35</td>
                                                <td>05-10-2012</td>
                                                <td>$3200</td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"
                                                        data-toggle="tooltip" data-original-title="Delete"><i
                                                            class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customControlValidation9" required>
                                                        <label class="custom-control-label"
                                                            for="customControlValidation9"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img
                                                            src="../../assets/images/users/8.jpg" alt="user"
                                                            class="rounded-circle" width="30" /> Salman Khan</a>
                                                </td>
                                                <td><a href="https://www.wrappixel.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="becddfd2d3dfd0fed9d3dfd7d290ddd1d3">[email&#160;protected]</a></td>
                                                <td>+234 456 789</td>
                                                <td><span class="label label-info">Developer</span></td>
                                                <td>27</td>
                                                <td>11-10-2014</td>
                                                <td>$1800</td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"
                                                        data-toggle="tooltip" data-original-title="Delete"><i
                                                            class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customControlValidation10" required>
                                                        <label class="custom-control-label"
                                                            for="customControlValidation10"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img
                                                            src="../../assets/images/users/1.jpg" alt="user"
                                                            class="rounded-circle" width="30" /> Govinda jalan</a>
                                                </td>
                                                <td><a href="https://www.wrappixel.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="abccc4ddc2c5cfcaebccc6cac2c785c8c4c6">[email&#160;protected]</a></td>
                                                <td>+345 456 789</td>
                                                <td><span class="label label-success">Accountant</span></td>
                                                <td>18</td>
                                                <td>12-5-2017</td>
                                                <td>$100</td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"
                                                        data-toggle="tooltip" data-original-title="Delete"><i
                                                            class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customControlValidation11" required>
                                                        <label class="custom-control-label"
                                                            for="customControlValidation11"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img
                                                            src="../../assets/images/users/2.jpg" alt="user"
                                                            class="rounded-circle" width="30" /> Sonu Nigam</a>
                                                </td>
                                                <td><a href="https://www.wrappixel.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="cebda1a0bb8ea9a3afa7a2e0ada1a3">[email&#160;protected]</a></td>
                                                <td>+456 456 789</td>
                                                <td><span class="label label-inverse">HR</span></td>
                                                <td>36</td>
                                                <td>18-5-2009</td>
                                                <td>$4200</td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"
                                                        data-toggle="tooltip" data-original-title="Delete"><i
                                                            class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customControlValidation12" required>
                                                        <label class="custom-control-label"
                                                            for="customControlValidation12"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img
                                                            src="../../assets/images/users/3.jpg" alt="user"
                                                            class="rounded-circle" width="30" /> Varun Dhawan</a>
                                                </td>
                                                <td><a href="https://www.wrappixel.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="82f4e3f0f7ecc2e5efe3ebeeace1edef">[email&#160;protected]</a></td>
                                                <td>+567 456 789</td>
                                                <td><span class="label label-danger">Manager</span></td>
                                                <td>43</td>
                                                <td>12-10-2010</td>
                                                <td>$5200</td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"
                                                        data-toggle="tooltip" data-original-title="Delete"><i
                                                            class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customControlValidation13" required>
                                                        <label class="custom-control-label"
                                                            for="customControlValidation13"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img
                                                            src="../../assets/images/users/4.jpg" alt="user"
                                                            class="rounded-circle" width="30" /> Genelia Deshmukh</a>
                                                </td>
                                                <td><a href="https://www.wrappixel.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="96f1f3f8f3fafff7d6f1fbf7fffab8f5f9fb">[email&#160;protected]</a></td>
                                                <td>+123 456 789</td>
                                                <td><span class="label label-danger">Designer</span> </td>
                                                <td>23</td>
                                                <td>12-10-2014</td>
                                                <td>$1200</td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"
                                                        data-toggle="tooltip" data-original-title="Delete"><i
                                                            class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customControlValidation14" required>
                                                        <label class="custom-control-label"
                                                            for="customControlValidation14"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img
                                                            src="../../assets/images/users/5.jpg" alt="user"
                                                            class="rounded-circle" width="30" /> Arijit Singh</a>
                                                </td>
                                                <td><a href="https://www.wrappixel.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="701102191a190430171d11191c5e131f1d">[email&#160;protected]</a></td>
                                                <td>+234 456 789</td>
                                                <td><span class="label label-info">Developer</span> </td>
                                                <td>26</td>
                                                <td>10-09-2014</td>
                                                <td>$1800</td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"
                                                        data-toggle="tooltip" data-original-title="Delete"><i
                                                            class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customControlValidation15" required>
                                                        <label class="custom-control-label"
                                                            for="customControlValidation15"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img
                                                            src="../../assets/images/users/6.jpg" alt="user"
                                                            class="rounded-circle" width="30" /> Govinda jalan</a>
                                                </td>
                                                <td><a href="https://www.wrappixel.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="45222a332c2b2124052228242c296b262a28">[email&#160;protected]</a></td>
                                                <td>+345 456 789</td>
                                                <td><span class="label label-success">Accountant</span></td>
                                                <td>28</td>
                                                <td>1-10-2013</td>
                                                <td>$2200</td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"
                                                        data-toggle="tooltip" data-original-title="Delete"><i
                                                            class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customControlValidation16" required>
                                                        <label class="custom-control-label"
                                                            for="customControlValidation16"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img
                                                            src="../../assets/images/users/1.jpg" alt="user"
                                                            class="rounded-circle" width="30" /> Genelia Deshmukh</a>
                                                </td>
                                                <td><a href="https://www.wrappixel.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3d5a58535851545c7d5a505c5451135e5250">[email&#160;protected]</a></td>
                                                <td>+123 456 789</td>
                                                <td><span class="label label-danger">Designer</span> </td>
                                                <td>23</td>
                                                <td>12-10-2014</td>
                                                <td>$1200</td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"
                                                        data-toggle="tooltip" data-original-title="Delete"><i
                                                            class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customControlValidation17" required>
                                                        <label class="custom-control-label"
                                                            for="customControlValidation17"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img
                                                            src="../../assets/images/users/2.jpg" alt="user"
                                                            class="rounded-circle" width="30" /> Arijit Singh</a>
                                                </td>
                                                <td><a href="https://www.wrappixel.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="28495a4142415c684f45494144064b4745">[email&#160;protected]</a></td>
                                                <td>+234 456 789</td>
                                                <td><span class="label label-info">Developer</span> </td>
                                                <td>26</td>
                                                <td>10-09-2014</td>
                                                <td>$1800</td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"
                                                        data-toggle="tooltip" data-original-title="Delete"><i
                                                            class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customControlValidation18" required>
                                                        <label class="custom-control-label"
                                                            for="customControlValidation18"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img
                                                            src="../../assets/images/users/3.jpg" alt="user"
                                                            class="rounded-circle" width="30" /> Govinda jalan</a>
                                                </td>
                                                <td><a href="https://www.wrappixel.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="caada5bca3a4aeab8aada7aba3a6e4a9a5a7">[email&#160;protected]</a></td>
                                                <td>+345 456 789</td>
                                                <td><span class="label label-success">Accountant</span></td>
                                                <td>28</td>
                                                <td>1-10-2013</td>
                                                <td>$2200</td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"
                                                        data-toggle="tooltip" data-original-title="Delete"><i
                                                            class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customControlValidation19" required>
                                                        <label class="custom-control-label"
                                                            for="customControlValidation19"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img
                                                            src="../../assets/images/users/4.jpg" alt="user"
                                                            class="rounded-circle" width="30" /> Hritik Roshan</a>
                                                </td>
                                                <td><a href="https://www.wrappixel.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2149534855484a61464c40484d0f424e4c">[email&#160;protected]</a></td>
                                                <td>+456 456 789</td>
                                                <td><span class="label label-inverse">HR</span></td>
                                                <td>25</td>
                                                <td>2-10-2017</td>
                                                <td>$200</td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"
                                                        data-toggle="tooltip" data-original-title="Delete"><i
                                                            class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customControlValidation20" required>
                                                        <label class="custom-control-label"
                                                            for="customControlValidation20"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img
                                                            src="../../assets/images/users/5.jpg" alt="user"
                                                            class="rounded-circle" width="30" /> John Abraham</a>
                                                </td>
                                                <td><a href="https://www.wrappixel.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bcd6d3d4d2fcdbd1ddd5d092dfd3d1">[email&#160;protected]</a></td>
                                                <td>+567 456 789</td>
                                                <td><span class="label label-danger">Manager</span></td>
                                                <td>23</td>
                                                <td>10-9-2015</td>
                                                <td>$1200</td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"
                                                        data-toggle="tooltip" data-original-title="Delete"><i
                                                            class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customControlValidation21" required>
                                                        <label class="custom-control-label"
                                                            for="customControlValidation21"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img
                                                            src="../../assets/images/users/6.jpg" alt="user"
                                                            class="rounded-circle" width="30" /> Pawandeep kumar</a>
                                                </td>
                                                <td><a href="https://www.wrappixel.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9cecfdebfdf2f8f9f9ecdcfbf1fdf5f0b2fff3f1">[email&#160;protected]</a></td>
                                                <td>+678 456 789</td>
                                                <td><span class="label label-warning">Chairman</span></td>
                                                <td>29</td>
                                                <td>10-5-2013</td>
                                                <td>$1500</td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"
                                                        data-toggle="tooltip" data-original-title="Delete"><i
                                                            class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customControlValidation22" required>
                                                        <label class="custom-control-label"
                                                            for="customControlValidation22"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img
                                                            src="../../assets/images/users/7.jpg" alt="user"
                                                            class="rounded-circle" width="30" /> Ritesh Deshmukh</a>
                                                </td>
                                                <td><a href="https://www.wrappixel.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e3918a9786908ba3848e828a8fcd808c8e">[email&#160;protected]</a></td>
                                                <td>+123 456 789</td>
                                                <td><span class="label label-danger">Designer</span></td>
                                                <td>35</td>
                                                <td>05-10-2012</td>
                                                <td>$3200</td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"
                                                        data-toggle="tooltip" data-original-title="Delete"><i
                                                            class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customControlValidation23" required>
                                                        <label class="custom-control-label"
                                                            for="customControlValidation23"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img
                                                            src="../../assets/images/users/8.jpg" alt="user"
                                                            class="rounded-circle" width="30" /> Salman Khan</a>
                                                </td>
                                                <td><a href="https://www.wrappixel.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9ceffdf0f1fdf2dcfbf1fdf5f0b2fff3f1">[email&#160;protected]</a></td>
                                                <td>+234 456 789</td>
                                                <td><span class="label label-info">Developer</span></td>
                                                <td>27</td>
                                                <td>11-10-2014</td>
                                                <td>$1800</td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"
                                                        data-toggle="tooltip" data-original-title="Delete"><i
                                                            class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customControlValidation24" required>
                                                        <label class="custom-control-label"
                                                            for="customControlValidation24"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img
                                                            src="../../assets/images/users/1.jpg" alt="user"
                                                            class="rounded-circle" width="30" /> Govinda jalan</a>
                                                </td>
                                                <td><a href="https://www.wrappixel.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="462129302f28222706212b272f2a6825292b">[email&#160;protected]</a></td>
                                                <td>+345 456 789</td>
                                                <td><span class="label label-success">Accountant</span></td>
                                                <td>18</td>
                                                <td>12-5-2017</td>
                                                <td>$100</td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"
                                                        data-toggle="tooltip" data-original-title="Delete"><i
                                                            class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customControlValidation25" required>
                                                        <label class="custom-control-label"
                                                            for="customControlValidation25"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="app-contact-detail.html"><img
                                                            src="../../assets/images/users/2.jpg" alt="user"
                                                            class="rounded-circle" width="30" /> Sonu Nigam</a>
                                                </td>
                                                <td><a href="https://www.wrappixel.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="22514d4c5762454f434b4e0c414d4f">[email&#160;protected]</a></td>
                                                <td>+456 456 789</td>
                                                <td><span class="label label-inverse">HR</span></td>
                                                <td>36</td>
                                                <td>18-5-2009</td>
                                                <td>$4200</td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"
                                                        data-toggle="tooltip" data-original-title="Delete"><i
                                                            class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
@endsection