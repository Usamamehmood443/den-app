<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Den App Admin DASHBOARD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <!-- Font  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <!-- Font  -->
  <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />

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
                  <path d="M15.7673 27.9999C11.1575 27.8509 7.65247 25.9084 5.16165 22.137C4.95824 21.8287 4.94964 21.5491 5.11982 21.2173C6.3552 18.8107 8.28849 17.3673 10.9667 16.9296C11.3328 16.87 11.6279 16.9874 11.9184 17.1897C13.1527 18.0498 14.5267 18.4343 16.0262 18.3689C17.147 18.3197 18.2334 18.0647 19.1342 17.4006C19.8619 16.8643 20.5638 16.8786 21.3459 17.1072C23.6288 17.7747 25.2922 19.174 26.3396 21.3096C26.4565 21.5485 26.4387 21.7508 26.2961 21.9771C24.2591 25.2071 21.3752 27.1839 17.6043 27.8297C16.9688 27.9386 16.3173 27.9512 15.7673 27.9999Z" fill="white" />
                  <path d="M9.48662 10.2079C9.50037 6.7825 12.3029 3.99028 15.7168 4.00003C19.1393 4.00977 21.9252 6.80886 21.9281 10.2279C21.931 13.5404 19.2757 16.4512 15.6801 16.4524C12.2445 16.4535 9.47344 13.6224 9.48662 10.2079Z" fill="white" />
                </svg>
              </span>
              Customers
            </a>
          </li>
          <li class="mb-40 active">
            <a href="{{ route('restaurant') }}" class="text-decoration-none text-white fs-14 fw-normal">
              <span class="me-4">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M26.6194 13.9607C24.4037 11.0678 21.4569 9.37061 17.855 8.7946C18.1538 7.81423 17.9778 6.99474 17.1784 6.39646C16.5155 5.90018 15.7714 5.84128 15.0446 6.25713C14.0441 6.83027 13.8358 7.72876 14.1246 8.78454C7.82507 9.65502 3.28378 14.9289 2.75732 20.6301H29.2431C28.9788 18.1343 28.1162 15.9136 26.6194 13.9607ZM15.2723 12.6723C14.0369 12.7771 12.8619 13.0931 11.7602 13.6627C9.64289 14.7572 8.15761 16.4221 7.27061 18.6363C7.17293 18.8798 6.97255 19.1434 6.74846 19.2547C6.59261 19.3323 6.21195 19.2346 6.11715 19.0917C5.98284 18.8906 5.92036 18.5408 5.99936 18.3146C6.67305 16.3955 7.83297 14.8125 9.43676 13.565C11.116 12.2586 13.025 11.5217 15.1473 11.3536C15.6659 11.3127 15.997 11.5885 15.9934 12.0093C15.9898 12.3799 15.7391 12.6328 15.2723 12.6723Z" fill="white" />
                  <path d="M31.7439 23.3077C30.6874 25.0271 29.1425 25.9859 27.1329 25.9945C19.7094 26.0268 12.2852 26.029 4.86171 25.9931C2.7954 25.9837 1.22609 24.9768 0.183955 23.1863C-0.22543 22.4817 0.0654486 22.007 0.887809 22.007C5.93329 22.0048 10.9781 22.0063 16.0235 22.0063C21.0231 22.0063 26.0233 22.0063 31.0228 22.0048C31.3625 22.0041 31.6987 21.9933 31.9034 22.3388C32.121 22.7051 31.9285 23.0082 31.7439 23.3077Z" fill="white" />
                </svg>
              </span>
              Resturant
            </a>
          </li>
          <li class="mb-40">
            <a href="{{ route('reports') }}" class="text-decoration-none text-white fs-14 fw-normal">
              <span class="me-4">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M17.8057 2C17.8057 2.19249 17.8057 2.34195 17.8057 2.49083C17.8057 4.65245 17.8057 6.81349 17.8057 8.97511C17.8057 10.461 18.4972 11.1455 19.9964 11.1455C22.1441 11.1455 24.2918 11.1455 26.4394 11.1455C26.5906 11.1455 26.7412 11.1455 26.9512 11.1455C26.9512 11.3129 26.9512 11.4595 26.9512 11.6055C26.9512 17.4663 26.9518 23.3272 26.9512 29.188C26.9512 30.5407 26.2266 31.2671 24.878 31.2671C18.9479 31.2677 13.0178 31.2677 7.08776 31.2671C5.71414 31.2671 5 30.546 5 29.1595C5 20.805 5 12.4505 5 4.09532C5.00058 2.71821 5.71938 2.00058 7.0994 2C10.5079 2 13.9163 2 17.3242 2C17.4626 2 17.6004 2 17.8057 2ZM19.6649 14.8232C19.6649 19.1034 19.6649 23.3446 19.6649 27.587C20.8804 27.587 22.0662 27.587 23.2682 27.587C23.2682 23.3249 23.2682 19.083 23.2682 14.8232C22.0603 14.8232 20.8746 14.8232 19.6649 14.8232ZM14.1757 18.4834C14.1757 21.5378 14.1757 24.5601 14.1757 27.5742C15.3993 27.5742 16.5944 27.5742 17.783 27.5742C17.783 24.5287 17.783 21.5157 17.783 18.4834C16.5769 18.4834 15.3917 18.4834 14.1757 18.4834ZM12.288 27.5882C12.288 25.7528 12.288 23.9494 12.288 22.1548C11.0644 22.1548 9.8699 22.1548 8.68121 22.1548C8.68121 23.9814 8.68121 25.7755 8.68121 27.5882C9.88735 27.5882 11.072 27.5882 12.288 27.5882Z" fill="white" />
                  <path d="M26.8035 9.30775C24.4529 9.30775 22.0732 9.30775 19.6632 9.30775C19.6632 6.90013 19.6632 4.5024 19.6632 2.16748C22.026 4.53032 24.4162 6.92049 26.8035 9.30775Z" fill="white" />
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
      <!-- SIdebar Begin  -->
      <div class="col-lg-2 p-0 sm-none md-none laptop-none">
        <div class="sidebar">
          <div class="bg-right-sidebar"></div>
          <ul class="list-unstyled ms-4">
            <li class="mb-40 active">
              <a href="{{ route('admin.dashboard') }}" class="text-decoration-none text-white fs-14 fw-normal">
                <span class="me-4">
                  <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.7673 27.9999C11.1575 27.8509 7.65247 25.9084 5.16165 22.137C4.95824 21.8287 4.94964 21.5491 5.11982 21.2173C6.3552 18.8107 8.28849 17.3673 10.9667 16.9296C11.3328 16.87 11.6279 16.9874 11.9184 17.1897C13.1527 18.0498 14.5267 18.4343 16.0262 18.3689C17.147 18.3197 18.2334 18.0647 19.1342 17.4006C19.8619 16.8643 20.5638 16.8786 21.3459 17.1072C23.6288 17.7747 25.2922 19.174 26.3396 21.3096C26.4565 21.5485 26.4387 21.7508 26.2961 21.9771C24.2591 25.2071 21.3752 27.1839 17.6043 27.8297C16.9688 27.9386 16.3173 27.9512 15.7673 27.9999Z" fill="white" />
                    <path d="M9.48662 10.2079C9.50037 6.7825 12.3029 3.99028 15.7168 4.00003C19.1393 4.00977 21.9252 6.80886 21.9281 10.2279C21.931 13.5404 19.2757 16.4512 15.6801 16.4524C12.2445 16.4535 9.47344 13.6224 9.48662 10.2079Z" fill="white" />
                  </svg>
                </span>
                Customers
              </a>
            </li>
            <li class="mb-40">
              <a href="{{ route('restaurant') }}" class="text-decoration-none text-white fs-14 fw-normal">
                <span class="me-4">
                  <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M26.6194 13.9607C24.4037 11.0678 21.4569 9.37061 17.855 8.7946C18.1538 7.81423 17.9778 6.99474 17.1784 6.39646C16.5155 5.90018 15.7714 5.84128 15.0446 6.25713C14.0441 6.83027 13.8358 7.72876 14.1246 8.78454C7.82507 9.65502 3.28378 14.9289 2.75732 20.6301H29.2431C28.9788 18.1343 28.1162 15.9136 26.6194 13.9607ZM15.2723 12.6723C14.0369 12.7771 12.8619 13.0931 11.7602 13.6627C9.64289 14.7572 8.15761 16.4221 7.27061 18.6363C7.17293 18.8798 6.97255 19.1434 6.74846 19.2547C6.59261 19.3323 6.21195 19.2346 6.11715 19.0917C5.98284 18.8906 5.92036 18.5408 5.99936 18.3146C6.67305 16.3955 7.83297 14.8125 9.43676 13.565C11.116 12.2586 13.025 11.5217 15.1473 11.3536C15.6659 11.3127 15.997 11.5885 15.9934 12.0093C15.9898 12.3799 15.7391 12.6328 15.2723 12.6723Z" fill="white" />
                    <path d="M31.7439 23.3077C30.6874 25.0271 29.1425 25.9859 27.1329 25.9945C19.7094 26.0268 12.2852 26.029 4.86171 25.9931C2.7954 25.9837 1.22609 24.9768 0.183955 23.1863C-0.22543 22.4817 0.0654486 22.007 0.887809 22.007C5.93329 22.0048 10.9781 22.0063 16.0235 22.0063C21.0231 22.0063 26.0233 22.0063 31.0228 22.0048C31.3625 22.0041 31.6987 21.9933 31.9034 22.3388C32.121 22.7051 31.9285 23.0082 31.7439 23.3077Z" fill="white" />
                  </svg>
                </span>
                Resturant
              </a>
            </li>
            <li class="mb-40">
              <a href="{{ route('reports') }}" class="text-decoration-none text-white fs-14 fw-normal">
                <span class="me-4">
                  <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.8057 2C17.8057 2.19249 17.8057 2.34195 17.8057 2.49083C17.8057 4.65245 17.8057 6.81349 17.8057 8.97511C17.8057 10.461 18.4972 11.1455 19.9964 11.1455C22.1441 11.1455 24.2918 11.1455 26.4394 11.1455C26.5906 11.1455 26.7412 11.1455 26.9512 11.1455C26.9512 11.3129 26.9512 11.4595 26.9512 11.6055C26.9512 17.4663 26.9518 23.3272 26.9512 29.188C26.9512 30.5407 26.2266 31.2671 24.878 31.2671C18.9479 31.2677 13.0178 31.2677 7.08776 31.2671C5.71414 31.2671 5 30.546 5 29.1595C5 20.805 5 12.4505 5 4.09532C5.00058 2.71821 5.71938 2.00058 7.0994 2C10.5079 2 13.9163 2 17.3242 2C17.4626 2 17.6004 2 17.8057 2ZM19.6649 14.8232C19.6649 19.1034 19.6649 23.3446 19.6649 27.587C20.8804 27.587 22.0662 27.587 23.2682 27.587C23.2682 23.3249 23.2682 19.083 23.2682 14.8232C22.0603 14.8232 20.8746 14.8232 19.6649 14.8232ZM14.1757 18.4834C14.1757 21.5378 14.1757 24.5601 14.1757 27.5742C15.3993 27.5742 16.5944 27.5742 17.783 27.5742C17.783 24.5287 17.783 21.5157 17.783 18.4834C16.5769 18.4834 15.3917 18.4834 14.1757 18.4834ZM12.288 27.5882C12.288 25.7528 12.288 23.9494 12.288 22.1548C11.0644 22.1548 9.8699 22.1548 8.68121 22.1548C8.68121 23.9814 8.68121 25.7755 8.68121 27.5882C9.88735 27.5882 11.072 27.5882 12.288 27.5882Z" fill="white" />
                    <path d="M26.8035 9.30775C24.4529 9.30775 22.0732 9.30775 19.6632 9.30775C19.6632 6.90013 19.6632 4.5024 19.6632 2.16748C22.026 4.53032 24.4162 6.92049 26.8035 9.30775Z" fill="white" />
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
      <!-- SIdebar End  -->
      <div class="col-xl-10 col-lg-12 col-md-12 col-12 px-40">
        <!-- Header Begin  -->
        <div class="header mt-30">
          <div class="row d-flex align-items-center">
            <div class="col-xl-2 col-lg-2 col-md-2 col-2 xl-d-none">
              <a class="" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#fff" class="bi bi-list" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
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
        <div class="row  mt-4">
          <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <h2 class="fs-26 text-white fw-bold mb-11">Hi, Admin</h2>
                <p class="fs-16 text-white fw-normal mb-0">Here’s your dashboard</p>
              </div>
              <a type="button" class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#calenderModal">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M20.8662 2.66675C21.4323 2.66542 21.8799 3.1052 21.8812 3.69157L21.8825 4.69107C25.5554 4.97893 27.9816 7.48168 27.9855 11.3198L28 22.5541C28.0053 26.7387 25.3763 29.3134 21.1624 29.3201L10.8692 29.3334C6.6816 29.3387 4.01976 26.7027 4.0145 22.5062L4.00001 11.4037C3.99475 7.54031 6.33538 5.04423 10.0082 4.70707L10.0069 3.70757C10.0056 3.12119 10.44 2.68008 11.0193 2.68008C11.5985 2.67875 12.0329 3.11853 12.0342 3.7049L12.0356 4.63777L19.8552 4.62711L19.8539 3.69424C19.8526 3.10787 20.287 2.66809 20.8662 2.66675ZM21.4033 21.5893H21.3902C20.7846 21.6039 20.2988 22.1117 20.312 22.7247C20.3133 23.3377 20.8017 23.8428 21.4073 23.8561C22.0247 23.8548 22.5249 23.3471 22.5236 22.7207C22.5236 22.0944 22.022 21.5893 21.4033 21.5893ZM10.5559 21.5906C9.95031 21.6173 9.4764 22.125 9.47771 22.738C9.50536 23.3511 10.0056 23.8308 10.6112 23.8028C11.2049 23.7762 11.6775 23.2684 11.6498 22.6554C11.6367 22.0557 11.1483 21.5893 10.5559 21.5906ZM15.9796 21.5839C15.374 21.6119 14.9014 22.1183 14.9014 22.7314C14.9291 23.3444 15.4293 23.8228 16.0349 23.7962C16.6273 23.7682 17.1012 23.2618 17.0736 22.6474C17.0604 22.049 16.572 21.5826 15.9796 21.5839ZM10.5493 16.793C9.94373 16.8197 9.47113 17.3274 9.47244 17.9404C9.49878 18.5535 10.0003 19.0332 10.6059 19.0052C11.1983 18.9786 11.6709 18.4708 11.6433 17.8578C11.6301 17.2581 11.143 16.7917 10.5493 16.793ZM15.9743 16.7464C15.3688 16.773 14.8949 17.2808 14.8962 17.8938C14.9225 18.5068 15.4241 18.9852 16.0296 18.9586C16.622 18.9306 17.0946 18.4242 17.0683 17.8112C17.0538 17.2115 16.5667 16.745 15.9743 16.7464ZM21.3981 16.753C20.7925 16.7664 20.3186 17.2594 20.3199 17.8725V17.8871C20.3331 18.5002 20.8333 18.9653 21.4402 18.9519C22.0326 18.9373 22.5052 18.4295 22.492 17.8165C22.4644 17.2301 21.9891 16.7517 21.3981 16.753ZM19.8578 6.67941L12.0382 6.69007L12.0395 7.7682C12.0395 8.34258 11.6064 8.79568 11.0272 8.79568C10.4479 8.79702 10.0122 8.34524 10.0122 7.77086L10.0109 6.74471C7.44382 7.00192 6.02338 8.51049 6.02732 11.401L6.02865 11.8155L25.9595 11.7889V11.3224C25.9029 8.45719 24.4654 6.95394 21.8851 6.73005L21.8865 7.75621C21.8865 8.32925 21.4402 8.78369 20.8741 8.78369C20.2949 8.78502 19.8591 8.33192 19.8591 7.75887L19.8578 6.67941Z" fill="white" />
                </svg>
              </a>
            </div>
          </div>
        </div>
        <!-- -------END--------- -->
        <!-- -------BEGIN--------- -->
        <div class="row mt-30">
          <div class="col-12">
            <div class="customer-info">
              <ul class="nav nav-tabs justify-content-between border-0" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link bg-transparent text-white fs-16 fw-bold border-0 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Total customers
                    <p class="fs-16 fw-500 mb-0">{{ $totalCustomers }}</p>
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link bg-transparent text-white fs-16 fw-bold border-0" id="profile-tab" data-bs-toggle="tab" data-bs-target=".profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Active Customers
                    <p class="fs-16 fw-500 mb-0">12</p>
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link bg-transparent text-white fs-16 fw-bold border-0" id="contact-tab" data-bs-toggle="tab" data-bs-target=".profile-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">New Customers
                    <p class="fs-16 fw-500 mb-0">{{ $newCustomers }}</p>
                  </button>
                </li>
              </ul>
              <div class="tab-content mt-50" id="myTabContent">
                <div class="tab-pane fade show text-white active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                  <div class="row">
                    <div class="col-md-6 col-12">
                      <div class="d-flex justify-content-between mb-3 px-2">
                        <h4 class="fs-16 fw-bold mb-0">Orders By Value</h4>
                        <div class="dropdown">
                          <button class="btn btn-secondary dropdown-toggle bg-transparent border-0 p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M19.0762 3H4.72805C3.9592 3 3.47796 3.83148 3.86095 4.49814L8.56995 12.6949C9.17951 13.7559 9.50028 14.9582 9.50028 16.1819V19.5072C9.50028 20.2189 10.2226 20.7028 10.8808 20.432L13.8808 19.1977C14.2556 19.0435 14.5003 18.6783 14.5003 18.273V13.8372C14.5003 12.8089 14.8174 11.8056 15.4083 10.964L19.8946 4.57465C20.3599 3.912 19.8859 3 19.0762 3Z" fill="#fff" />
                            </svg>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-start border-radius-10 border-0 bg-dark py-0">
                            <li><a class="dropdown-item fs-16 fw-normal text-white py-3 border-10" href="#">Filter By Value</a></li>
                            <li><a class="dropdown-item fs-16 fw-normal text-white py-3" href="#">Filter By Orders</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="table-card">
                        <div class="row">
                          <div class="col-12 table-responsive">
                            <table class="table border-0 mb-0">
                              <thead>
                                <tr class="border-bottom-0">
                                  <th scope="col">Customer Name</th>
                                  <th scope="col">Order Q</th>
                                  <th scope="col">Value</th>
                                </tr>
                              </thead>
                              <tbody class="border-bottom-0">
                                @foreach($customers as $customer)
                                <tr>
                                  <td class="pb-22">{{ $customer->name }}</td>
                                  <td class="fw-500 pb-22">6 Orders</td>
                                  <td class="fw-500 text-success pb-22">$320</td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-12">
                      <h4 class="fs-16 fw-bold mb-23 px-2">Geographic List</h4>
                      <div class="table-card">
                        <div class="row">
                          <div class="col-12">
                            <div class="table-responsive">
                              <table class="table border-0 mb-0">
                                <thead>
                                  <tr class="border-bottom-0">
                                    <th scope="col">Area</th>
                                    <th scope="col">Customers</th>
                                  </tr>
                                </thead>
                                <tbody class="border-bottom-0">
                                  <tr>
                                    <td class="fw-500 pb-22">Model Town, Lahore</td>
                                    <td class="fw-500 pb-22">10 Customers</td>
                                  </tr>
                                  <tr>
                                    <td class="fw-500 pb-22">Johar Town, Lahore</td>
                                    <td class="fw-500 pb-22">7 Customers</td>
                                  </tr>
                                  <tr>
                                    <td class="fw-500">Mughalpura Lahore</td>
                                    <td class="fw-500">5 Customers</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade text-white profile-tab-pane" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                  <div class="row">
                    <div class="col-md-12 col-12">
                      <div class="row">
                        <div class="col-12">
                          <div class="total-customer">
                            <table class="table border-0 mb-0">
                              <thead>
                                <tr class="border-bottom-0 text-secondary fw-400">
                                  <th scope="col" style="width: 5%;"></th>
                                  <th scope="col" style="font-weight: 400;">Customer Name</th>
                                  <th scope="col" style="font-weight: 400;">Contact Info</th>
                                  <th scope="col" style="font-weight: 400;">Number of Orders</th>
                                </tr>
                              </thead>
                              <tbody class="border-bottom-0">
                                <tr>
                                  <td>
                                    <div class="form-check mt-1 ms-2">
                                      <input class="form-check-input bg-transparent" type="checkbox" value="" id="flexCheckDefault">
                                    </div>
                                  </td>
                                  <td class="fs-16 text-white fw-500">
                                    <a href="customer-detail.html" class="text-white text-decoration-none">
                                      <img src="{{ asset('/images/customer-img.png') }}" class="img-fluid customer-img me-3" alt="">
                                      Williams Devon
                                    </a>
                                  </td>
                                  <td class="fs-16 text-white fw-500 mt-2">williamsdev@example.com</td>
                                  <td class="fw-500 text-white">10 Orders</td>
                                  <td class="">
                                    <div class="dropdown">
                                      <button class="btn btn-secondary dropdown-toggle bg-transparent border-0 p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg width="12" height="25" viewBox="0 0 15 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <circle cx="7.5" cy="2.5" r="2.5" fill="#D9D9D9" />
                                          <circle cx="7.5" cy="12.5" r="2.5" fill="#D9D9D9" />
                                          <circle cx="7.5" cy="22.5" r="2.5" fill="#D9D9D9" />
                                        </svg>
                                      </button>
                                      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-start border-radius-10 border-0 bg-dark py-0">
                                        <li><a class="dropdown-item fs-16 fw-normal text-white py-3 border-10" href="#">Filter By Value</a></li>
                                        <li><a class="dropdown-item fs-16 fw-normal text-white py-3" href="#">Filter By Orders</a></li>
                                      </ul>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="form-check mt-1 ms-2">
                                      <input class="form-check-input bg-transparent" type="checkbox" value="" id="flexCheckDefault">
                                    </div>
                                  </td>
                                  <td class="fs-16 text-white fw-500">
                                    <a href="customer-detail.html" class="text-white text-decoration-none">
                                      <img src="{{ asset('/images/customer-img.png') }}" class="img-fluid customer-img me-3" alt="">
                                      James Smith
                                    </a>
                                  </td>
                                  <td class="fs-16 text-white fw-500 mt-2">jamie.s@example.com</td>
                                  <td class="fw-500 text-white">10 Orders</td>
                                  <td class="">
                                    <div class="dropdown">
                                      <button class="btn btn-secondary dropdown-toggle bg-transparent border-0 p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg width="12" height="25" viewBox="0 0 15 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <circle cx="7.5" cy="2.5" r="2.5" fill="#D9D9D9" />
                                          <circle cx="7.5" cy="12.5" r="2.5" fill="#D9D9D9" />
                                          <circle cx="7.5" cy="22.5" r="2.5" fill="#D9D9D9" />
                                        </svg>
                                      </button>
                                      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-start border-radius-10 border-0 bg-dark py-0">
                                        <li><a class="dropdown-item fs-16 fw-normal text-white py-3 border-10" href="#">Filter By Value</a></li>
                                        <li><a class="dropdown-item fs-16 fw-normal text-white py-3" href="#">Filter By Orders</a></li>
                                      </ul>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="form-check mt-1 ms-2">
                                      <input class="form-check-input bg-transparent" type="checkbox" value="" id="flexCheckDefault">
                                    </div>
                                  </td>
                                  <td class="fs-16 text-white fw-500">
                                    <a href="customer-detail.html" class="text-white text-decoration-none">
                                      <img src="{{ asset('/images/customer-img.png') }}" class="img-fluid customer-img me-3" alt="">
                                      Linda Sal
                                    </a>

                                  </td>
                                  <td class="fs-16 text-white fw-500 mt-2">sallinda@example.com</td>
                                  <td class="fw-500 text-white">10 Orders</td>
                                  <td class="">
                                    <div class="dropdown">
                                      <button class="btn btn-secondary dropdown-toggle bg-transparent border-0 p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg width="12" height="25" viewBox="0 0 15 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <circle cx="7.5" cy="2.5" r="2.5" fill="#D9D9D9" />
                                          <circle cx="7.5" cy="12.5" r="2.5" fill="#D9D9D9" />
                                          <circle cx="7.5" cy="22.5" r="2.5" fill="#D9D9D9" />
                                        </svg>
                                      </button>
                                      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-start border-radius-10 border-0 bg-dark py-0">
                                        <li><a class="dropdown-item fs-16 fw-normal text-white py-3 border-10" href="#">Filter By Value</a></li>
                                        <li><a class="dropdown-item fs-16 fw-normal text-white py-3" href="#">Filter By Orders</a></li>
                                      </ul>
                                    </div>
                                  </td>
                                </tr>

                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
        <!-- -------END--------- -->
        <!-- Dashboard End  -->

      </div>
    </div>
  </div>


  <!-- Calender Modal Begin  -->
  <!-- ---------------------------------------ADD MENU MOdal  BEGIN---------------------------------  -->
  <div class="modal fade" id="calenderModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content border-radius-20">

        <div class="modal-body bg-dark border-radius-10 pt-4">
          <div class="container">
            <div class="calendar-section">
              <div class="row">

                <div class="col-sm-6">

                  <div class="calendar calendar-first" id="calendar_first">
                    <div class="calendar_header">
                      <button class="switch-month switch-left">
                        <svg width="12" height="10" viewBox="0 0 23 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M23 7.76509L3.97943 7.76619L10.3704 1.57268L8.97873 0.136677L0.136213 8.70602L8.70556 17.5485L10.1416 16.1569L3.94806 9.76595L22.9996 9.76595L23 7.76509Z" fill="#595959" />
                        </svg>
                      </button>
                      <h2></h2>
                      <button class="switch-month switch-right">
                        <svg width="12" height="10" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M0 4H9M9 4L6 1M9 4L6 7" stroke="#595959" />
                        </svg>
                      </button>
                    </div>
                    <div class="calendar_weekdays"></div>
                    <div class="calendar_content"></div>
                  </div>

                </div>
                <div class="col-sm-6">

                  <div class="calendar calendar-second" id="calendar_second">
                    <div class="calendar_header">
                      <button class="switch-month switch-left">
                        <svg width="12" height="10" viewBox="0 0 23 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M23 7.76509L3.97943 7.76619L10.3704 1.57268L8.97873 0.136677L0.136213 8.70602L8.70556 17.5485L10.1416 16.1569L3.94806 9.76595L22.9996 9.76595L23 7.76509Z" fill="#595959" />
                        </svg>
                      </button>
                      <h2></h2>
                      <button class="switch-month switch-right">
                        <svg width="12" height="10" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M0 4H9M9 4L6 1M9 4L6 7" stroke="#595959" />
                        </svg>
                      </button>
                    </div>
                    <div class="calendar_weekdays"></div>
                    <div class="calendar_content"></div>
                  </div>

                </div>

              </div> <!-- End Row -->

            </div> <!-- End Calendar -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ---------------------------------------ADD MENU MOdal END---------------------------------  -->
  <!-- Calender Modal End  -->




  <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  <script>
    $(document).ready(function() {
      function c(passed_month, passed_year, calNum) {
        var calendar = calNum == 0 ? calendars.cal1 : calendars.cal2;
        makeWeek(calendar.weekline);
        calendar.datesBody.empty();
        var calMonthArray = makeMonthArray(passed_month, passed_year);
        var r = 0;
        var u = false;
        while (!u) {
          if (daysArray[r] == calMonthArray[0].weekday) {
            u = true
          } else {
            calendar.datesBody.append('<div class="blank"></div>');
            r++;
          }
        }
        for (var cell = 0; cell < 42 - r; cell++) { // 42 date-cells in calendar
          if (cell >= calMonthArray.length) {
            calendar.datesBody.append('<div class="blank"></div>');
          } else {
            var shownDate = calMonthArray[cell].day;
            // Later refactiroing -- iter_date not needed after "today" is found
            var iter_date = new Date(passed_year, passed_month, shownDate);
            if (
              (
                (shownDate != today.getDate() && passed_month == today.getMonth()) ||
                passed_month != today.getMonth()
              ) &&
              iter_date < today) {
              var m = '<div class="past-date">';
            } else {
              var m = checkToday(iter_date) ? '<div class="today">' : "<div>";
            }
            calendar.datesBody.append(m + shownDate + "</div>");
          }
        }

        // var color = o[passed_month];
        calendar.calHeader.find("h2").text(i[passed_month] + " " + passed_year);
        //.css("background-color",color)
        //.find("h2").text(i[passed_month]+" "+year);

        // find elements (dates) to be clicked on each time
        // the calendar is generated

        //clickedElement = bothCals.find(".calendar_content").find("div");
        var clicked = false;
        selectDates(selected);

        clickedElement = calendar.datesBody.find('div');
        clickedElement.on("click", function() {
          clicked = $(this);
          if (clicked.hasClass('past-date')) {
            return;
          }
          var whichCalendar = calendar.name;
          console.log(whichCalendar);
          // Understading which element was clicked;
          // var parentClass = $(this).parent().parent().attr('class');
          if (firstClick && secondClick) {
            thirdClicked = getClickedInfo(clicked, calendar);
            var firstClickDateObj = new Date(firstClicked.year,
              firstClicked.month,
              firstClicked.date);
            var secondClickDateObj = new Date(secondClicked.year,
              secondClicked.month,
              secondClicked.date);
            var thirdClickDateObj = new Date(thirdClicked.year,
              thirdClicked.month,
              thirdClicked.date);
            if (secondClickDateObj > thirdClickDateObj &&
              thirdClickDateObj > firstClickDateObj) {
              secondClicked = thirdClicked;
              // then choose dates again from the start :)
              bothCals.find(".calendar_content").find("div").each(function() {
                $(this).removeClass("selected");
              });
              selected = {};
              selected[firstClicked.year] = {};
              selected[firstClicked.year][firstClicked.month] = [firstClicked.date];
              selected = addChosenDates(firstClicked, secondClicked, selected);
            } else { // reset clicks
              selected = {};
              firstClicked = [];
              secondClicked = [];
              firstClick = false;
              secondClick = false;
              bothCals.find(".calendar_content").find("div").each(function() {
                $(this).removeClass("selected");
              });
            }
          }
          if (!firstClick) {
            firstClick = true;
            firstClicked = getClickedInfo(clicked, calendar);
            selected[firstClicked.year] = {};
            selected[firstClicked.year][firstClicked.month] = [firstClicked.date];
          } else {
            console.log('second click');
            secondClick = true;
            secondClicked = getClickedInfo(clicked, calendar);
            //console.log(secondClicked);

            // what if second clicked date is before the first clicked?
            var firstClickDateObj = new Date(firstClicked.year,
              firstClicked.month,
              firstClicked.date);
            var secondClickDateObj = new Date(secondClicked.year,
              secondClicked.month,
              secondClicked.date);

            if (firstClickDateObj > secondClickDateObj) {

              var cachedClickedInfo = secondClicked;
              secondClicked = firstClicked;
              firstClicked = cachedClickedInfo;
              selected = {};
              selected[firstClicked.year] = {};
              selected[firstClicked.year][firstClicked.month] = [firstClicked.date];

            } else if (firstClickDateObj.getTime() ==
              secondClickDateObj.getTime()) {
              selected = {};
              firstClicked = [];
              secondClicked = [];
              firstClick = false;
              secondClick = false;
              $(this).removeClass("selected");
            }


            // add between dates to [selected]
            selected = addChosenDates(firstClicked, secondClicked, selected);
          }
          // console.log(selected);
          selectDates(selected);
        });

      }

      function selectDates(selected) {
        if (!$.isEmptyObject(selected)) {
          var dateElements1 = datesBody1.find('div');
          var dateElements2 = datesBody2.find('div');

          function highlightDates(passed_year, passed_month, dateElements) {
            if (passed_year in selected && passed_month in selected[passed_year]) {
              var daysToCompare = selected[passed_year][passed_month];
              // console.log(daysToCompare);
              for (var d in daysToCompare) {
                dateElements.each(function(index) {
                  if (parseInt($(this).text()) == daysToCompare[d]) {
                    $(this).addClass('selected');
                  }
                });
              }

            }
          }

          highlightDates(year, month, dateElements1);
          highlightDates(nextYear, nextMonth, dateElements2);
        }
      }

      function makeMonthArray(passed_month, passed_year) { // creates Array specifying dates and weekdays
        var e = [];
        for (var r = 1; r < getDaysInMonth(passed_year, passed_month) + 1; r++) {
          e.push({
            day: r,
            // Later refactor -- weekday needed only for first week
            weekday: daysArray[getWeekdayNum(passed_year, passed_month, r)]
          });
        }
        return e;
      }

      function makeWeek(week) {
        week.empty();
        for (var e = 0; e < 7; e++) {
          week.append("<div>" + daysArray[e].substring(0, 3) + "</div>")
        }
      }

      function getDaysInMonth(currentYear, currentMon) {
        return (new Date(currentYear, currentMon + 1, 0)).getDate();
      }

      function getWeekdayNum(e, t, n) {
        return (new Date(e, t, n)).getDay();
      }

      function checkToday(e) {
        var todayDate = today.getFullYear() + '/' + (today.getMonth() + 1) + '/' + today.getDate();
        var checkingDate = e.getFullYear() + '/' + (e.getMonth() + 1) + '/' + e.getDate();
        return todayDate == checkingDate;

      }

      function getAdjacentMonth(curr_month, curr_year, direction) {
        var theNextMonth;
        var theNextYear;
        if (direction == "next") {
          theNextMonth = (curr_month + 1) % 12;
          theNextYear = (curr_month == 11) ? curr_year + 1 : curr_year;
        } else {
          theNextMonth = (curr_month == 0) ? 11 : curr_month - 1;
          theNextYear = (curr_month == 0) ? curr_year - 1 : curr_year;
        }
        return [theNextMonth, theNextYear];
      }

      function b() {
        today = new Date;
        year = today.getFullYear();
        month = today.getMonth();
        var nextDates = getAdjacentMonth(month, year, "next");
        nextMonth = nextDates[0];
        nextYear = nextDates[1];
      }

      var e = 480;

      var today;
      var year,
        month,
        nextMonth,
        nextYear;

      //var t=2013;
      //var n=9;
      var r = [];
      var i = ["JANUARY", "FEBRUARY", "MARCH", "APRIL", "MAY",
        "JUNE", "JULY", "AUGUST", "SEPTEMBER", "OCTOBER",
        "NOVEMBER", "DECEMBER"
      ];
      var daysArray = ["Sunday", "Monday", "Tuesday",
        "Wednesday", "Thursday", "Friday", "Saturday"
      ];
      var o = ["#16a085", "#1abc9c", "#c0392b", "#27ae60",
        "#FF6860", "#f39c12", "#f1c40f", "#e67e22",
        "#2ecc71", "#e74c3c", "#d35400", "#2c3e50"
      ];

      var cal1 = $("#calendar_first");
      var calHeader1 = cal1.find(".calendar_header");
      var weekline1 = cal1.find(".calendar_weekdays");
      var datesBody1 = cal1.find(".calendar_content");

      var cal2 = $("#calendar_second");
      var calHeader2 = cal2.find(".calendar_header");
      var weekline2 = cal2.find(".calendar_weekdays");
      var datesBody2 = cal2.find(".calendar_content");

      var bothCals = $(".calendar");

      var switchButton = bothCals.find(".calendar_header").find('.switch-month');

      var calendars = {
        "cal1": {
          "name": "first",
          "calHeader": calHeader1,
          "weekline": weekline1,
          "datesBody": datesBody1
        },
        "cal2": {
          "name": "second",
          "calHeader": calHeader2,
          "weekline": weekline2,
          "datesBody": datesBody2
        }
      }


      var clickedElement;
      var firstClicked,
        secondClicked,
        thirdClicked;
      var firstClick = false;
      var secondClick = false;
      var selected = {};

      b();
      c(month, year, 0);
      c(nextMonth, nextYear, 1);
      switchButton.on("click", function() {
        var clicked = $(this);
        var generateCalendars = function(e) {
          var nextDatesFirst = getAdjacentMonth(month, year, e);
          var nextDatesSecond = getAdjacentMonth(nextMonth, nextYear, e);
          month = nextDatesFirst[0];
          year = nextDatesFirst[1];
          nextMonth = nextDatesSecond[0];
          nextYear = nextDatesSecond[1];

          c(month, year, 0);
          c(nextMonth, nextYear, 1);
        };
        if (clicked.attr("class").indexOf("left") != -1) {
          generateCalendars("previous");
        } else {
          generateCalendars("next");
        }
        clickedElement = bothCals.find(".calendar_content").find("div");
        console.log("checking");
      });


      //  Click picking stuff
      function getClickedInfo(element, calendar) {
        var clickedInfo = {};
        var clickedCalendar,
          clickedMonth,
          clickedYear;
        clickedCalendar = calendar.name;
        //console.log(element.parent().parent().attr('class'));
        clickedMonth = clickedCalendar == "first" ? month : nextMonth;
        clickedYear = clickedCalendar == "first" ? year : nextYear;
        clickedInfo = {
          "calNum": clickedCalendar,
          "date": parseInt(element.text()),
          "month": clickedMonth,
          "year": clickedYear
        }
        //console.log(clickedInfo);
        return clickedInfo;
      }


      // Finding between dates MADNESS. Needs refactoring and smartening up :)
      function addChosenDates(firstClicked, secondClicked, selected) {
        if (secondClicked.date > firstClicked.date ||
          secondClicked.month > firstClicked.month ||
          secondClicked.year > firstClicked.year) {

          var added_year = secondClicked.year;
          var added_month = secondClicked.month;
          var added_date = secondClicked.date;
          console.log(selected);

          if (added_year > firstClicked.year) {
            // first add all dates from all months of Second-Clicked-Year
            selected[added_year] = {};
            selected[added_year][added_month] = [];
            for (var i = 1; i <= secondClicked.date; i++) {
              selected[added_year][added_month].push(i);
            }

            added_month = added_month - 1;
            console.log(added_month);
            while (added_month >= 0) {
              selected[added_year][added_month] = [];
              for (var i = 1; i <= getDaysInMonth(added_year, added_month); i++) {
                selected[added_year][added_month].push(i);
              }
              added_month = added_month - 1;
            }

            added_year = added_year - 1;
            added_month = 11; // reset month to Dec because we decreased year
            added_date = getDaysInMonth(added_year, added_month); // reset date as well

            // Now add all dates from all months of inbetween years
            while (added_year > firstClicked.year) {
              selected[added_year] = {};
              for (var i = 0; i < 12; i++) {
                selected[added_year][i] = [];
                for (var d = 1; d <= getDaysInMonth(added_year, i); d++) {
                  selected[added_year][i].push(d);
                }
              }
              added_year = added_year - 1;
            }
          }

          if (added_month > firstClicked.month) {
            if (firstClicked.year == secondClicked.year) {
              console.log("here is the month:", added_month);
              selected[added_year][added_month] = [];
              for (var i = 1; i <= secondClicked.date; i++) {
                selected[added_year][added_month].push(i);
              }
              added_month = added_month - 1;
            }
            while (added_month > firstClicked.month) {
              selected[added_year][added_month] = [];
              for (var i = 1; i <= getDaysInMonth(added_year, added_month); i++) {
                selected[added_year][added_month].push(i);
              }
              added_month = added_month - 1;
            }
            added_date = getDaysInMonth(added_year, added_month);
          }

          for (var i = firstClicked.date + 1; i <= added_date; i++) {
            selected[added_year][added_month].push(i);
          }
        }
        return selected;
      }
    });
  </script>


</body>

</html>