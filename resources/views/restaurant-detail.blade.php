<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Restaurant Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font  -->
    <link rel="stylesheet" href="https://unpkg.com/@yaireo/tagify/dist/tagify.css">
    <link rel="stylesheet" href="{{ asset('/scss/theme.css') }}">

  </head>
  <body>
    <div class="container-fluid">
       <!-----------------------------------Mobile SIdebar BEGIN------------------------------------  -->
       
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header bg-dark border-0">
          <h5 class="offcanvas-title" id="offcanvasExampleLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body bg-dark border-0">
          <ul class="list-unstyled ms-4">
            <li class="mb-40 ">
                <a href="{{ route('admin.dashboard') }}" class="text-decoration-none text-white fs-14 fw-normal">
                    <span class="me-4">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.7673 27.9999C11.1575 27.8509 7.65247 25.9084 5.16165 22.137C4.95824 21.8287 4.94964 21.5491 5.11982 21.2173C6.3552 18.8107 8.28849 17.3673 10.9667 16.9296C11.3328 16.87 11.6279 16.9874 11.9184 17.1897C13.1527 18.0498 14.5267 18.4343 16.0262 18.3689C17.147 18.3197 18.2334 18.0647 19.1342 17.4006C19.8619 16.8643 20.5638 16.8786 21.3459 17.1072C23.6288 17.7747 25.2922 19.174 26.3396 21.3096C26.4565 21.5485 26.4387 21.7508 26.2961 21.9771C24.2591 25.2071 21.3752 27.1839 17.6043 27.8297C16.9688 27.9386 16.3173 27.9512 15.7673 27.9999Z" fill="white"/>
                            <path d="M9.48662 10.2079C9.50037 6.7825 12.3029 3.99028 15.7168 4.00003C19.1393 4.00977 21.9252 6.80886 21.9281 10.2279C21.931 13.5404 19.2757 16.4512 15.6801 16.4524C12.2445 16.4535 9.47344 13.6224 9.48662 10.2079Z" fill="white"/>
                            </svg>                                        
                    </span>
                    Customers
                </a>
            </li>
            <li class="mb-40 active" >
                <a href="{{ route('restaurant') }}" class="text-decoration-none text-white fs-14 fw-normal">
                    <span class="me-4">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M26.6194 13.9607C24.4037 11.0678 21.4569 9.37061 17.855 8.7946C18.1538 7.81423 17.9778 6.99474 17.1784 6.39646C16.5155 5.90018 15.7714 5.84128 15.0446 6.25713C14.0441 6.83027 13.8358 7.72876 14.1246 8.78454C7.82507 9.65502 3.28378 14.9289 2.75732 20.6301H29.2431C28.9788 18.1343 28.1162 15.9136 26.6194 13.9607ZM15.2723 12.6723C14.0369 12.7771 12.8619 13.0931 11.7602 13.6627C9.64289 14.7572 8.15761 16.4221 7.27061 18.6363C7.17293 18.8798 6.97255 19.1434 6.74846 19.2547C6.59261 19.3323 6.21195 19.2346 6.11715 19.0917C5.98284 18.8906 5.92036 18.5408 5.99936 18.3146C6.67305 16.3955 7.83297 14.8125 9.43676 13.565C11.116 12.2586 13.025 11.5217 15.1473 11.3536C15.6659 11.3127 15.997 11.5885 15.9934 12.0093C15.9898 12.3799 15.7391 12.6328 15.2723 12.6723Z" fill="white"/>
                            <path d="M31.7439 23.3077C30.6874 25.0271 29.1425 25.9859 27.1329 25.9945C19.7094 26.0268 12.2852 26.029 4.86171 25.9931C2.7954 25.9837 1.22609 24.9768 0.183955 23.1863C-0.22543 22.4817 0.0654486 22.007 0.887809 22.007C5.93329 22.0048 10.9781 22.0063 16.0235 22.0063C21.0231 22.0063 26.0233 22.0063 31.0228 22.0048C31.3625 22.0041 31.6987 21.9933 31.9034 22.3388C32.121 22.7051 31.9285 23.0082 31.7439 23.3077Z" fill="white"/>
                        </svg>                                                                               
                    </span>
                    Resturant
                </a>
            </li>
            <li class="mb-40">
                <a href="{{ route('reports') }}" class="text-decoration-none text-white fs-14 fw-normal">
                    <span class="me-4">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.8057 2C17.8057 2.19249 17.8057 2.34195 17.8057 2.49083C17.8057 4.65245 17.8057 6.81349 17.8057 8.97511C17.8057 10.461 18.4972 11.1455 19.9964 11.1455C22.1441 11.1455 24.2918 11.1455 26.4394 11.1455C26.5906 11.1455 26.7412 11.1455 26.9512 11.1455C26.9512 11.3129 26.9512 11.4595 26.9512 11.6055C26.9512 17.4663 26.9518 23.3272 26.9512 29.188C26.9512 30.5407 26.2266 31.2671 24.878 31.2671C18.9479 31.2677 13.0178 31.2677 7.08776 31.2671C5.71414 31.2671 5 30.546 5 29.1595C5 20.805 5 12.4505 5 4.09532C5.00058 2.71821 5.71938 2.00058 7.0994 2C10.5079 2 13.9163 2 17.3242 2C17.4626 2 17.6004 2 17.8057 2ZM19.6649 14.8232C19.6649 19.1034 19.6649 23.3446 19.6649 27.587C20.8804 27.587 22.0662 27.587 23.2682 27.587C23.2682 23.3249 23.2682 19.083 23.2682 14.8232C22.0603 14.8232 20.8746 14.8232 19.6649 14.8232ZM14.1757 18.4834C14.1757 21.5378 14.1757 24.5601 14.1757 27.5742C15.3993 27.5742 16.5944 27.5742 17.783 27.5742C17.783 24.5287 17.783 21.5157 17.783 18.4834C16.5769 18.4834 15.3917 18.4834 14.1757 18.4834ZM12.288 27.5882C12.288 25.7528 12.288 23.9494 12.288 22.1548C11.0644 22.1548 9.8699 22.1548 8.68121 22.1548C8.68121 23.9814 8.68121 25.7755 8.68121 27.5882C9.88735 27.5882 11.072 27.5882 12.288 27.5882Z" fill="white"/>
                            <path d="M26.8035 9.30775C24.4529 9.30775 22.0732 9.30775 19.6632 9.30775C19.6632 6.90013 19.6632 4.5024 19.6632 2.16748C22.026 4.53032 24.4162 6.92049 26.8035 9.30775Z" fill="white"/>
                        </svg>                                                                              
                    </span>
                    Reports
                </a>
            </li>
            <li class="mb-40">
                <a href="{{ route('customer-support') }}" class="text-decoration-none text-white fs-14 fw-normal">
                    <span class="me-3">
                      <img src="{{ asset('/images/support.svg') }}" class="img-fluid" alt="">                                                                                              
                    </span>
                    Customer Support
                </a>
            </li>
        </ul>
          
        </div>
      </div>
      <!-----------------------------------Mobile SIdebar End------------------------------------  -->
        <div class="row">
            <!----------------------------------- SIdebar Begin---------------------------------  -->
            <div class="col-lg-2 p-0 sm-none md-none laptop-none">
                <div class="sidebar">
                    <div class="bg-right-sidebar"></div>
                    <ul class="list-unstyled ms-4">
                        <li class="mb-40 ">
                            <a href="{{ route('admin.dashboard') }}" class="text-decoration-none text-white fs-14 fw-normal">
                                <span class="me-4">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.7673 27.9999C11.1575 27.8509 7.65247 25.9084 5.16165 22.137C4.95824 21.8287 4.94964 21.5491 5.11982 21.2173C6.3552 18.8107 8.28849 17.3673 10.9667 16.9296C11.3328 16.87 11.6279 16.9874 11.9184 17.1897C13.1527 18.0498 14.5267 18.4343 16.0262 18.3689C17.147 18.3197 18.2334 18.0647 19.1342 17.4006C19.8619 16.8643 20.5638 16.8786 21.3459 17.1072C23.6288 17.7747 25.2922 19.174 26.3396 21.3096C26.4565 21.5485 26.4387 21.7508 26.2961 21.9771C24.2591 25.2071 21.3752 27.1839 17.6043 27.8297C16.9688 27.9386 16.3173 27.9512 15.7673 27.9999Z" fill="white"/>
                                        <path d="M9.48662 10.2079C9.50037 6.7825 12.3029 3.99028 15.7168 4.00003C19.1393 4.00977 21.9252 6.80886 21.9281 10.2279C21.931 13.5404 19.2757 16.4512 15.6801 16.4524C12.2445 16.4535 9.47344 13.6224 9.48662 10.2079Z" fill="white"/>
                                        </svg>                                        
                                </span>
                                Customers
                            </a>
                        </li>
                        <li class="mb-40 active" >
                            <a href="{{ route('restaurant') }}" class="text-decoration-none text-white fs-14 fw-normal">
                                <span class="me-4">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M26.6194 13.9607C24.4037 11.0678 21.4569 9.37061 17.855 8.7946C18.1538 7.81423 17.9778 6.99474 17.1784 6.39646C16.5155 5.90018 15.7714 5.84128 15.0446 6.25713C14.0441 6.83027 13.8358 7.72876 14.1246 8.78454C7.82507 9.65502 3.28378 14.9289 2.75732 20.6301H29.2431C28.9788 18.1343 28.1162 15.9136 26.6194 13.9607ZM15.2723 12.6723C14.0369 12.7771 12.8619 13.0931 11.7602 13.6627C9.64289 14.7572 8.15761 16.4221 7.27061 18.6363C7.17293 18.8798 6.97255 19.1434 6.74846 19.2547C6.59261 19.3323 6.21195 19.2346 6.11715 19.0917C5.98284 18.8906 5.92036 18.5408 5.99936 18.3146C6.67305 16.3955 7.83297 14.8125 9.43676 13.565C11.116 12.2586 13.025 11.5217 15.1473 11.3536C15.6659 11.3127 15.997 11.5885 15.9934 12.0093C15.9898 12.3799 15.7391 12.6328 15.2723 12.6723Z" fill="white"/>
                                        <path d="M31.7439 23.3077C30.6874 25.0271 29.1425 25.9859 27.1329 25.9945C19.7094 26.0268 12.2852 26.029 4.86171 25.9931C2.7954 25.9837 1.22609 24.9768 0.183955 23.1863C-0.22543 22.4817 0.0654486 22.007 0.887809 22.007C5.93329 22.0048 10.9781 22.0063 16.0235 22.0063C21.0231 22.0063 26.0233 22.0063 31.0228 22.0048C31.3625 22.0041 31.6987 21.9933 31.9034 22.3388C32.121 22.7051 31.9285 23.0082 31.7439 23.3077Z" fill="white"/>
                                    </svg>                                                                               
                                </span>
                                Resturant
                            </a>
                        </li>
                        <li class="mb-40">
                            <a href="{{ route('reports') }}" class="text-decoration-none text-white fs-14 fw-normal">
                                <span class="me-4">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.8057 2C17.8057 2.19249 17.8057 2.34195 17.8057 2.49083C17.8057 4.65245 17.8057 6.81349 17.8057 8.97511C17.8057 10.461 18.4972 11.1455 19.9964 11.1455C22.1441 11.1455 24.2918 11.1455 26.4394 11.1455C26.5906 11.1455 26.7412 11.1455 26.9512 11.1455C26.9512 11.3129 26.9512 11.4595 26.9512 11.6055C26.9512 17.4663 26.9518 23.3272 26.9512 29.188C26.9512 30.5407 26.2266 31.2671 24.878 31.2671C18.9479 31.2677 13.0178 31.2677 7.08776 31.2671C5.71414 31.2671 5 30.546 5 29.1595C5 20.805 5 12.4505 5 4.09532C5.00058 2.71821 5.71938 2.00058 7.0994 2C10.5079 2 13.9163 2 17.3242 2C17.4626 2 17.6004 2 17.8057 2ZM19.6649 14.8232C19.6649 19.1034 19.6649 23.3446 19.6649 27.587C20.8804 27.587 22.0662 27.587 23.2682 27.587C23.2682 23.3249 23.2682 19.083 23.2682 14.8232C22.0603 14.8232 20.8746 14.8232 19.6649 14.8232ZM14.1757 18.4834C14.1757 21.5378 14.1757 24.5601 14.1757 27.5742C15.3993 27.5742 16.5944 27.5742 17.783 27.5742C17.783 24.5287 17.783 21.5157 17.783 18.4834C16.5769 18.4834 15.3917 18.4834 14.1757 18.4834ZM12.288 27.5882C12.288 25.7528 12.288 23.9494 12.288 22.1548C11.0644 22.1548 9.8699 22.1548 8.68121 22.1548C8.68121 23.9814 8.68121 25.7755 8.68121 27.5882C9.88735 27.5882 11.072 27.5882 12.288 27.5882Z" fill="white"/>
                                        <path d="M26.8035 9.30775C24.4529 9.30775 22.0732 9.30775 19.6632 9.30775C19.6632 6.90013 19.6632 4.5024 19.6632 2.16748C22.026 4.53032 24.4162 6.92049 26.8035 9.30775Z" fill="white"/>
                                    </svg>                                                                              
                                </span>
                                Reports
                            </a>
                        </li>
                        <li class="mb-40">
                            <a href="{{ route('customer-support') }}" class="text-decoration-none text-white fs-14 fw-normal">
                                <span class="me-3">
                                  <img src="{{ asset('/images/support.svg') }}" class="img-fluid" alt="">                                                                                                            
                                </span>
                                Customer Support
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
           
            <!----------------------------------- SIdebar End------------------------------------  -->
            <div class="col-xl-10 col-lg-12 col-md-12 col-12 px-40">
            <!-- Header Begin  -->
            <div class="header mt-30">
                <div class="row d-flex align-items-center">
                  <div class="col-xl-2 col-lg-2 col-md-2 col-2 xl-d-none">
                    <a class="" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#fff" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                      </svg>
                    </a>
                  </div>
                    <div class="col-xl-6 col-lg-6 col-md-8 col-8">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-lg bg-black border-radius-10 border-0 h-60px" placeholder="Search customers here" name="search" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <button type="button" class="input-group-text bg-black border-0 cursor-pointer" id="search">
                                    <img src="{{ asset('/images/search.svg') }}" class="img-fluid" alt="">
                                </span>
                              </div>
                    </div>
                    <div class="col-xl-6 col-lg-4 col-md-2 col-2">
                        <div class="text-end">
                            <a href="#">
                                <img src="{{ asset('/images/upload.svg') }}" class="img-upload" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header END  -->

            <!-- Dashboard Begin  -->
            <!-- -------BEGIN--------- -->
            <div class="row  mt-30">
              <div class="col-md-4 col-12">
                  <div class="bg-black py-24 border-radius-10 mb-sm-20 mb-md-20">
                    <div class="d-flex ps-28">
                      <img src="{{ asset('/images/customer-img.png') }}" class="img-fluid customer-img" alt="">
                      <div class="ms-20">
                        <h6 class="mb-0 text-white fw-bold fs-16">Williams Devon</h6>
                        <p class="mb-0 text-white fw-500 fs-16">10 Orders</p>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="col-md-4 col-12">
                <div class="bg-black py-24 border-radius-10 text-center align-items-center">
                    <h5 class="fs-16 text-white fw-bold mb-0">Total Revenue</h5>
                    <p class="text-white fw-500 fs-16 mb-0">$ 670.52</p>
                </div>
            </div>
            <div class="col-md-4 col-12"></div>
          </div>
            <!-- -------END--------- -->
            <!-- -------BEGIN--------- -->
            <div class="row mt-100">
              <div class="col-lg-12 col-md-12 col-12">
                <div class="text-start">
                  <h6 class="text-secondary fw-400 mb-25 ms-3">Contact Info</h6>
                </div>
                  <div class="contact-card position-relative">
                    <img src="{{ asset('/images/approved.png') }}" class="img-fluid position-absolute" style="right:5%; bottom: 10%; width: 64px; height: 64px;" alt="">
                    <div class="row">
                      <div class="col-md-6 col-12">
                        <div class="mb-30">
                          <h6 class="text-white fw-bold fs-16 mb-1">Physical Address</h6>
                          <p class="text-white fw-500 fs-16 mb-0">23-A Dr Mateen Fatima Rd, Block H <br> Gulberg، Lahore, Punjab</p>
                        </div>
                        <div class="">
                          <h6 class="text-white fw-bold fs-16 mb-1">Billing Address</h6>
                          <p class="text-white fw-500 fs-16 mb-20">23-A Dr Mateen Fatima Rd, Block H <br> Gulberg، Lahore, Punjab</p>
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <div class="mb-lg-5 mb-sm-20">
                          <h6 class="text-white fw-bold fs-16 mb-1">Company Registration Number</h6>
                          <p class="text-white fw-500 fs-16 mb-0">31801 7382694 7</p>
                        </div>
                        <div class="">
                          <h6 class="text-white fw-bold fs-16 mb-1">Zimpra BP Number</h6>
                          <p class="text-white fw-500 fs-16 mb-0">PMR - 568 - bfhm</p>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <!-- -------END--------- -->
            <!-- -------BEGIN --------- -->
            <div class="row mt-40">
              <div class="col-12">
                  <div class="">
                      <h6 class="text-secondary fw-400 mb-25 ms-3">Categories</h6>
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="categories-card">
                  <div class="tag-card">
                    <input class='tagify--outside' placeholder='Search Tag' value='Breakfast, Lunch, Snacks'>
                </div>
                </div>
              </div>
            </div>
            <!-- -------END--------- -->
            <!-- -------BEGIN --------- -->
            <div class="row mt-4">
              <div class="col-12">
                  <div class="d-flex justify-content-between">
                      <h6 class="text-secondary fw-400 mb-25 ms-3">Menu Items</h6>
                      <a type="button" class="text-danger" data-bs-toggle="modal" data-bs-target="#addMenu">Add Menu</a>
                  </div>
              </div>
            </div>
            <div class="row gy-3 gx-5">
              <div class="col-lg-4 col-md-6 col-12">
                <div class="contact-card px-39 h-100">
                    <h6 class="text-white fw-bold fs-16 mb-3">Shahi Haleem</h6>
                    <p class="text-white fw-500 fs-16 mb-40">Haleem is a type of stew that is widely consumed in the Indian...</p>
                    <p class="text-white fw-bold fs-16 mb-0">$ 1150</p>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-12">
                <div class="contact-card px-39 h-100">
                  <h6 class="text-white fw-bold fs-16 mb-3">Chicken Karahi</h6>
                  <p class="text-white fw-500 fs-16 mb-40">Chicken karahi, or kadai chicken, is a chicken dish from the Indian subcontinent.</p>
                  <p class="text-white fw-bold fs-16 mb-0">$ 1150</p>
              </div>
              </div>
              <div class="col-lg-4 col-md-6 col-12">
                <div class="contact-card px-39 h-100">
                  <h6 class="text-white fw-bold fs-16 mb-3">Chicken Biryani</h6>
                  <p class="text-white fw-500 fs-16 mb-40">Haleem is a type of stew that is widely consumed in the Indian...</p>
                  <p class="text-white fw-bold fs-16 mb-0">$ 1150</p>
              </div>
              </div>
            </div>
            <!-- -------END--------- -->
            <!-- -------BEGIN --------- -->
            <div class="row mt-4">
              <div class="col-12">
                  <div class="d-flex justify-content-between">
                      <h6 class="text-secondary fw-400 mb-25 ms-3">Deals</h6>
                      <a type="button" class="text-danger" data-bs-toggle="modal" data-bs-target="#addDeal">Add Deal</a>
                  </div>
              </div>
            </div>
            <div class="row gy-3 gx-5">
              <div class="col-lg-4 col-md-6 col-12">
                <div class="contact-card px-39 h-100">
                  <div class="d-flex justify-content-between">
                    <h6 class="text-white fw-bold fs-16 mb-3">Deal #1</h6>
                    <a type="button" data-bs-toggle="modal" data-bs-target="#editDeal">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                      </svg>
                    </a>
                  </div>
                    <p class="text-white fw-500 fs-16 mb-3">1 Red Dragon Burger</p>
                    <p class="text-white fw-500 fs-16 mb-3">1 Regular Fries</p>
                    <p class="text-white fw-500 fs-16 mb-3">1 Half Littre Coke</p>
                    <div class="d-flex justify-content-between">
                      <p class="text-white fw-bold fs-16 mb-0">$ 1150</p>
                      <p class="text-white fw-bold fs-16 mb-0">Discount 30%</p>
                    </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-12">
                <div class="contact-card px-39 h-100">
                  <h6 class="text-white fw-bold fs-16 mb-3">Deal #2</h6>
                  <p class="text-white fw-500 fs-16 mb-3">1 Red Dragon Burger</p>
                  <p class="text-white fw-500 fs-16 mb-3">1 Regular Fries</p>
                  <p class="text-white fw-500 fs-16 mb-3">1 Half Littre Coke</p>
                  <p class="text-white fw-bold fs-16 mb-0">$ 1150</p>
              </div>
              </div>
              <div class="col-lg-4 col-md-6 col-12">
                <div class="contact-card px-39 h-100">
                  <h6 class="text-white fw-bold fs-16 mb-3">Deal #3</h6>
                  <p class="text-white fw-500 fs-16 mb-3">1 Red Dragon Burger</p>
                  <p class="text-white fw-500 fs-16 mb-3">1 Regular Fries</p>
                  <p class="text-white fw-500 fs-16 mb-3">1 Half Littre Coke</p>
                  <p class="text-white fw-bold fs-16 mb-0">$ 1150</p>
              </div>
              </div>
            </div>
            <!-- -------END--------- -->
            <div class="row mt-5 mb-5">
              <div class="col-12">
                  <div class="d-flex justify-content-between">
                      <a class="text-danger">Suspend Account</a>
                      <a class="text-danger">View Full Application Form</a>
                  </div>
              </div>
            </div>
            <!-- Dashboard End  -->
                
            </div>
        </div>
    </div>










    



    <!-- ---------------------------------------ADD DEAL MOdal  BEGIN---------------------------------  -->
    <div class="modal fade" id="addDeal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-radius-20">
      
      <div class="modal-body bg-dark border-radius-10 pt-4">
          <form class="row g-3">
        
            <div class="col-12">
              <input type="text" class="form-control h-60px bg-light border-0" id="inputAddress" placeholder="Food Item name">
            </div>
            <div class="col-12 mt-30">
              <textarea class="form-control bg-light border-0" rows="5" id="inputAddress" placeholder="Food Item Description"></textarea>
            </div>
            <div class="col-12 mt-30">
              <select class="form-select h-60px bg-light border-0" aria-label="Default select example">
                <option selected>Breakfast</option>
                <option value="1">Lunch</option>
                <option value="2">Snacks</option>
              </select>
            </div>
            <div class="col-12 mt-30">
              <input type="text" class="form-control h-60px bg-light border-0" disabled id="inputAddress2" placeholder="$400">
            </div>
            <div class="col-md-6 mt-30">
              <input type="number" class="form-control h-60px bg-light border-0" id="inputAddress2" placeholder="Discounted Price">
            </div>
            <div class="col-md-6 mt-30">
              <input type="number" class="form-control h-60px bg-light border-0" id="inputAddress2" placeholder="Discount %">
            </div>
            <div class="col-12 mt-30 mb-4">
              <div class="d-flex justify-content-between">
                <div class="">
                  <input class="form-control bg-transparent border-0" type="file" id="formFile">
                </div>
                <!-- <a href="#" class="fs-16 fw-600 text-dark">Upload Image</a> -->
                <a href="#" class="fs-16 fw-600 text-danger">Save Item</a>
              </div>
            </div>
          </form>
      </div>
    </div>
  </div>
    </div>
    <!-- ---------------------------------------ADD DEAL MOdal END---------------------------------  -->
       <!-- ---------------------------------------Edit DEAL MOdal  BEGIN---------------------------------  -->
       <div class="modal fade" id="editDeal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content border-radius-20">
            
            <div class="modal-body bg-dark border-radius-10 pt-4">
                <form class="row g-3">
              
                  <div class="col-12">
                    <input type="text" class="form-control h-60px bg-light border-0" value="Red Dragon Burger" id="food_name" name="food-name" placeholder="Food Item name">
                  </div>
                  <div class="col-12 mt-30">
                    <textarea class="form-control bg-light border-0" rows="5" id="food_item"  name="food-item" placeholder="Food Item Description"></textarea>
                  </div>
                  <div class="col-12 mt-30">
                    <select class="form-select h-60px bg-light border-0" aria-label="Default select example">
                      <option selected>Breakfast</option>
                      <option value="1">Lunch</option>
                      <option value="2">Snacks</option>
                    </select>
                  </div>
                  <div class="col-12 mt-30">
                    <input type="text" class="form-control h-60px bg-light border-0" disabled id="total_price" value="$400" name="total-price" placeholder="$400">
                  </div>
                  <div class="col-md-6 mt-30">
                    <input type="text" class="form-control h-60px bg-light border-0" id="discount_price" value="$50" name="discount-price" placeholder="Discounted Price">
                  </div>
                  <div class="col-md-6 mt-30">
                    <input type="text" class="form-control h-60px bg-light border-0" id="discount" name="discount" value="10%" placeholder="Discount %">
                  </div>
                  <div class="col-12 mt-30 mb-4">
                    <div class="d-flex justify-content-between">
                      <div class="">
                        <input class="form-control bg-transparent border-0" type="file" id="formFile">
                      </div>
                      <!-- <a href="#" class="fs-16 fw-600 text-dark">Upload Image</a> -->
                      <a href="#" class="fs-16 fw-600 text-danger">Save Item</a>
                    </div>
                  </div>
                </form>
            </div>
          </div>
        </div>
          </div>
          <!-- ---------------------------------------Edit DEAL MOdal END---------------------------------  -->

    <!-- ---------------------------------------ADD MENU MOdal  BEGIN---------------------------------  -->
    <div class="modal fade" id="addMenu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-radius-20">
          
          <div class="modal-body bg-dark border-radius-10 pt-4">
              <form class="row gx-4 gy-3">
                <div class="col-md-6">
                  <input type="text" class="form-control h-60px bg-light border-0" id="food_name" name="food-name" placeholder="Food Item name">
                  <select class="form-select h-60px bg-light border-0 mt-30" aria-label="Default select example">
                    <option selected>Category</option>
                    <option value="1">Breakfast</option>
                    <option value="2">Lunch</option>
                    <option value="3">Snacks</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <textarea class="form-control bg-light border-0 h-150px" name="food-item" id="food_item" placeholder="Food Item Description"></textarea>
                </div>
                <div class="col-12 mt-30">
                  <input type="number" class="form-control h-60px bg-light border-0" name="enter-price" id="enter_price" placeholder="Enter Price">
                </div>
                <div class="col-12 mt-30 mb-4">
                  <div class="d-flex justify-content-between">
                    <div class="">
                      <input class="form-control bg-transparent border-0" type="file" id="formFile">
                    </div>
                    <a href="#" class="fs-16 fw-600 text-danger">Save Item</a>
                  </div>
                </div>
              </form>
          </div>
        </div>
      </div>
        </div>
        <!-- ---------------------------------------ADD MENU MOdal END---------------------------------  -->
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@yaireo/tagify"></script>

    <script>
      var input = document.querySelector('.tagify--outside')

// init Tagify script on the above inputs
var tagify = new Tagify(input, {
    whitelist: ["Breakfast", "Lunch", "Snacks"],
    dropdown: {
        position: "input",
        enabled : 0 // always opens dropdown when input gets focus
    }
})
    </script>
  </body>
</html>