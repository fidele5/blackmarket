@extends('layouts.app')
@section('content')
    <div class="chat-application">
                <!-- ============================================================== -->
                <!-- Left Part  -->
                <!-- ============================================================== -->
                <div class="left-part bg-white fixed-left-part user-chat-box">
                    <!-- Mobile toggle button -->
                    <a class="ti-menu ti-close btn btn-success show-left-part d-block d-md-none" href="javascript:void(0)"></a>
                    <!-- Mobile toggle button -->
                    <div class="p-15">
                        <h4>Chat Sidebar</h4>
                    </div>
                    <div class="scrollable position-relative" style="height:100%;">
                        <div class="p-15 border-bottom">
                            <h5 class="card-title">Search Contact</h5>
                            <form>
                                <div class="searchbar">
                                    <input class="form-control" type="text" placeholder="Search Contact">
                                </div>
                            </form>
                        </div>
                        <ul class="mailbox list-style-none app-chat">
                            <li>
                                <div class="message-center chat-scroll chat-users">
                                    <a href="" class="chat-user message-item">
                                        <span class="user-img">
                                            <img src="/admin/assets/images/users/1.jpg" alt="user" class="rounded-circle">
                                            <span class="profile-status online pull-right"></span>
                                        </span>
                                        <div class="mail-contnet">
                                            <h5 class="message-title" >Pavan kumar</h5>
                                            <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span>
                                        </div>
                                    </a>
                                    <a href="" class="chat-user message-item">
                                        <span class="user-img">
                                            <img src="/admin/assets/images/users/1.jpg" alt="user" class="rounded-circle">
                                            <span class="profile-status online pull-right"></span>
                                        </span>
                                        <div class="mail-contnet">
                                            <h5 class="message-title">Pavan kumar</h5>
                                            <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Left Part  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right Part  Mail Compose -->
                <!-- ============================================================== -->
                <div class="right-part chat-container">
                    <div class="p-20 chat-box-inner-part">
                        <div class="chat-not-selected">
                            <div class="text-center">
                                <span class="display-5 text-info"><i class="mdi mdi-comment-outline"></i></span>
                                <h5>Open chat from the list</h5>
                            </div>
                        </div>
                        <div id="chatbox" class="card chatting-box mb-0">

                        </div>
                    </div>
                </div>
            </div>
@endsection