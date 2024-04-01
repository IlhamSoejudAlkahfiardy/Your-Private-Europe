<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="inner-banner-section sibling-2" style="background-image: url()">
  <!-- Breadcrumb video  -->

  <!-- Breadcrumb slider  -->

  <div class="swiper breadcrumb-slider">
    <div class="swiper-wrapper">

      <?php foreach ($destination as $data) : ?>
        <div class="swiper-slide" style="background-image: url('<?= base_url('assets/images/destinations/' . $data['image']) ?>')">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-xl-8 col-md-10 col-sm-12">
                <div class="breadcrumb-area">
                  <span><?= $data['sub_title'] ?></span>
                  <h2><?= $data['title'] ?></h2>
                  <div class="review-area"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
</div>

<div class="destination-details-section pt-120 pb-120">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-9 destination-tab">
        <div class="nav flex-row justify-content-start nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <button class="nav-link active nav-btn-style mb-20" id="v-pills-information-tab" data-bs-toggle="pill" data-bs-target="#v-pills-information" type="button" role="tab" aria-controls="v-pills-information" aria-selected="true">
            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
              <path d="M2.73398 0.0593748C1.75273 0.30625 1.05273 1.05 0.855859 2.05625C0.790234 2.4 0.790234 13.6 0.855859 13.9437C1.02773 14.8188 1.57461 15.4937 2.37461 15.8219C2.78398 15.9906 2.87773 16 4.29023 16C5.51211 16 5.60273 15.9969 5.71211 15.9406C5.85898 15.8656 5.95273 15.7656 6.01523 15.6188C6.14023 15.3125 6.01211 14.9625 5.71211 14.8094C5.60586 14.7531 5.51523 14.75 4.50898 14.75C3.91211 14.7469 3.32773 14.7344 3.21211 14.7219C2.66523 14.65 2.22461 14.2469 2.12461 13.7219C2.08086 13.4906 2.08086 2.50937 2.12461 2.27812C2.22461 1.75313 2.66523 1.35 3.21211 1.27812C3.48711 1.24375 10.8559 1.24375 11.1309 1.27812C11.6777 1.35 12.1184 1.75313 12.2184 2.27812C12.2371 2.38125 12.2496 3.23125 12.2496 4.46562V6.4875L12.3215 6.625C12.359 6.7 12.4434 6.80312 12.509 6.85625C12.609 6.9375 12.6621 6.95312 12.8402 6.9625C13.1527 6.98125 13.3715 6.85312 13.484 6.5875C13.5527 6.41875 13.5559 2.4125 13.4871 2.05625C13.284 1.02812 12.5652 0.278125 11.5684 0.0500002C11.3715 0.00624943 10.8996 0 7.14961 0.00312519C3.25586 0.00312519 2.93711 0.00937462 2.73398 0.0593748Z"></path>
              <path d="M3.67173 3.7999C3.24048 4.02178 3.19048 4.58428 3.57173 4.8874L3.69361 4.98428L7.12798 4.99365C10.4592 4.9999 10.5655 4.9999 10.6811 4.94053C11.1499 4.6999 11.1499 4.0499 10.6811 3.80928C10.5686 3.75303 10.4467 3.7499 7.16548 3.7499C4.14673 3.7499 3.75611 3.75615 3.67173 3.7999Z"></path>
              <path d="M3.67173 6.2999C3.24048 6.52178 3.19048 7.08428 3.57173 7.3874L3.69361 7.48428L7.12798 7.49365C10.4592 7.4999 10.5655 7.4999 10.6811 7.44053C11.1499 7.1999 11.1499 6.5499 10.6811 6.30928C10.5686 6.25303 10.4467 6.2499 7.16548 6.2499C4.14673 6.2499 3.75611 6.25615 3.67173 6.2999Z"></path>
              <path d="M12.8149 8.54689C12.5649 8.61877 12.3899 8.70314 12.1743 8.85627C12.0711 8.93127 11.1805 9.80002 10.1961 10.7875L8.41175 12.5781L8.29925 12.9375C7.63675 15.0969 7.61488 15.1719 7.61175 15.3813C7.60863 15.5656 7.62113 15.6031 7.70238 15.725C7.7555 15.7969 7.8555 15.8906 7.92113 15.9281C8.143 16.0531 8.268 16.0344 9.67738 15.6438C10.3836 15.4469 11.0086 15.2625 11.068 15.2344C11.1243 15.2063 11.9961 14.3563 13.0024 13.35C14.8243 11.5281 14.8368 11.5125 14.9649 11.25C15.2524 10.6594 15.2555 10.0906 14.9711 9.51564C14.7649 9.09689 14.3711 8.75002 13.9274 8.59377C13.6711 8.50314 13.068 8.47814 12.8149 8.54689ZM13.5211 9.81564C13.7211 9.89064 13.9055 10.1563 13.9055 10.375C13.9055 10.5156 13.8118 10.7125 13.6961 10.8188L13.6055 10.9063L13.1868 10.4844L12.768 10.0656L12.8586 9.96564C12.9118 9.91252 12.9961 9.85002 13.0461 9.82502C13.1586 9.77502 13.3993 9.76877 13.5211 9.81564ZM11.5524 12.9594L10.4055 14.1094L9.8055 14.275C9.47738 14.3656 9.2055 14.4344 9.20238 14.4313C9.19613 14.425 9.27425 14.1594 9.37113 13.8344L9.54613 13.25L10.6961 12.1031L11.8461 10.9563L12.2743 11.3844L12.7024 11.8125L11.5524 12.9594Z"></path>
              <path d="M3.67173 8.8C3.24048 9.025 3.19048 9.58438 3.57173 9.8875L3.69361 9.98438H5.90611H8.11861L8.24048 9.8875C8.58111 9.61563 8.58111 9.13438 8.24048 8.8625L8.11861 8.76563L5.94361 8.75625C4.01236 8.75 3.75611 8.75625 3.67173 8.8Z"></path>
            </svg>
            Highlight
          </button>
          <button class="nav-link nav-btn-style mb-20" id="v-pills-plan-tab" data-bs-toggle="pill" data-bs-target="#v-pills-plan" type="button" role="tab" aria-controls="v-pills-plan" aria-selected="true">
            <i class="lar la-user"></i>
            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_1652_1254)">
                <path d="M6.16875 0.0468197C5.73438 0.14057 5.24688 0.412445 4.9375 0.731194L4.8 0.874945H3.79375C2.87188 0.874945 2.775 0.881195 2.60938 0.937445C2.22813 1.0687 1.95312 1.31557 1.77188 1.68432L1.67188 1.89057V8.43745V14.9843L1.77188 15.1906C1.95312 15.5624 2.23438 15.8093 2.6125 15.9374C2.79375 15.9999 2.87813 15.9999 8.0625 15.9937L13.3281 15.9843L13.5469 15.8781C13.8344 15.7374 14.0813 15.4906 14.2219 15.2031L14.3281 14.9843V8.43745V1.89057L14.2281 1.68432C14.0469 1.31557 13.7719 1.0687 13.3906 0.937445C13.225 0.881195 13.1281 0.874945 12.2063 0.874945H11.2L11.0625 0.731194C10.7469 0.406195 10.2625 0.14057 9.81563 0.0436945C9.525 -0.0156803 6.45312 -0.0156803 6.16875 0.0468197ZM9.725 1.03119C10.1188 1.15307 10.4719 1.44994 10.6594 1.8187C10.7094 1.91869 10.75 2.01244 10.75 2.03119C10.75 2.05307 9.8625 2.06244 8 2.06244C6.1375 2.06244 5.25 2.05307 5.25 2.03119C5.25 1.95307 5.44375 1.62494 5.575 1.47807C5.75313 1.28119 5.98438 1.1312 6.25 1.04057C6.45 0.97182 6.48438 0.97182 7.9875 0.968695C9.43438 0.968695 9.5375 0.97182 9.725 1.03119ZM4.26875 1.89682C4.22187 2.05932 4.18125 2.39995 4.19375 2.54994C4.20938 2.73119 4.27188 2.84057 4.41875 2.94994C4.50312 3.01557 4.51875 3.01557 8 3.01557C11.4812 3.01557 11.4969 3.01557 11.5813 2.94994C11.7281 2.84057 11.7906 2.73119 11.8063 2.54994C11.8188 2.39995 11.7781 2.05932 11.7312 1.89682C11.7156 1.84682 11.7625 1.84369 12.3906 1.84369C13.15 1.84369 13.1938 1.85307 13.3219 2.06244L13.3906 2.17182V8.43745V14.7031L13.3219 14.8124C13.2844 14.8718 13.2125 14.9468 13.1625 14.9749C13.075 15.0281 12.7719 15.0312 8 15.0312C3.22812 15.0312 2.925 15.0281 2.8375 14.9781C2.7875 14.9468 2.71563 14.8718 2.67813 14.8124L2.60938 14.7031V8.43745V2.17182L2.675 2.0687C2.8125 1.85307 2.84375 1.84369 3.60312 1.84369C4.2375 1.84369 4.28437 1.84682 4.26875 1.89682Z"></path>
                <path d="M9.38078 4.53114C9.2339 4.62177 9.15578 4.76864 9.15578 4.95302C9.15578 5.19989 9.26828 5.34364 9.52453 5.42177L9.62765 5.45302L9.09328 5.98427L8.56203 6.51552L7.81828 5.77489C7.41203 5.36864 7.0464 5.02177 7.0089 5.00302C6.91515 4.95614 6.69953 4.95927 6.59953 5.01239C6.4964 5.06864 4.74015 6.83114 4.69015 6.92802C4.64015 7.02489 4.6464 7.26864 4.70265 7.37489C4.79953 7.56239 5.00578 7.65302 5.24328 7.60927C5.34328 7.59052 5.46515 7.48427 6.08703 6.86552L6.81203 6.14364L7.5714 6.89677C8.63078 7.95302 8.49328 7.95302 9.5714 6.88114C10.287 6.16552 10.3433 6.11864 10.3433 6.20614C10.3433 6.33427 10.4589 6.50302 10.5933 6.57177C10.8058 6.68114 11.1245 6.58739 11.2308 6.38114C11.262 6.32177 11.2777 6.11864 11.287 5.67802C11.3027 4.94677 11.2839 4.74364 11.1808 4.63427C11.0339 4.47489 10.9902 4.46864 10.212 4.46864C9.54015 4.46864 9.47453 4.47489 9.38078 4.53114Z"></path>
                <path d="M5.79688 9.2375C5.74688 9.2625 5.54375 9.44062 5.35312 9.63437L5 9.98125L4.91563 9.9C4.75938 9.75625 4.6625 9.7125 4.50313 9.7125C4.20938 9.7125 4.03125 9.89375 4.03125 10.1937C4.03125 10.3938 4.05625 10.4344 4.35625 10.7469C4.69688 11.0969 4.7875 11.1562 4.99687 11.1562C5.10938 11.1562 5.20312 11.1375 5.25 11.1062C5.40313 11.0031 6.38125 10.0125 6.44062 9.9C6.60938 9.57187 6.39062 9.1875 6.03437 9.1875C5.95625 9.1875 5.85 9.20938 5.79688 9.2375Z"></path>
                <path d="M7.46895 9.74687C7.14083 9.91875 7.12833 10.4 7.44395 10.5938C7.54395 10.6531 7.60645 10.6562 9.57833 10.6562C11.5502 10.6562 11.6127 10.6531 11.7127 10.5938C12.0283 10.4 12.0127 9.90625 11.6877 9.74375C11.5877 9.69063 11.419 9.6875 9.57833 9.6875C7.69083 9.6875 7.57208 9.69063 7.46895 9.74687Z"></path>
                <path d="M5.78125 11.9374C5.72188 11.9749 5.52188 12.153 5.3375 12.3343L5.00625 12.6655L4.85625 12.5436C4.71562 12.428 4.69688 12.4218 4.49375 12.4218C4.27813 12.4218 4.275 12.4218 4.15313 12.553C4.04063 12.6749 4.03125 12.6999 4.03125 12.8593C4.03125 12.9561 4.05 13.0718 4.075 13.1186C4.1 13.1655 4.25938 13.3374 4.42812 13.503C4.77812 13.8468 4.89688 13.9061 5.13437 13.8405C5.24375 13.8124 5.35625 13.7155 5.83438 13.2405C6.15 12.9311 6.425 12.6311 6.45312 12.5749C6.55313 12.3655 6.4875 12.0936 6.3125 11.9686C6.16563 11.8624 5.925 11.8499 5.78125 11.9374Z"></path>
                <path d="M7.47813 12.4374C7.28438 12.5249 7.21251 12.6562 7.22501 12.8968C7.23751 13.1062 7.30313 13.2093 7.47501 13.2999C7.60001 13.3655 11.5563 13.3655 11.6813 13.2999C11.8531 13.2093 11.9188 13.1062 11.9313 12.8968C11.9438 12.6562 11.8719 12.5249 11.6781 12.4374C11.5531 12.378 11.4531 12.3749 9.57813 12.3749C7.70313 12.3749 7.60313 12.378 7.47813 12.4374Z"></path>
              </g>
              <defs>
                <clipPath id="clip0_1652_1254">
                  <rect width="16" height="16"></rect>
                </clipPath>
              </defs>
            </svg>
            <?= $language == 'id' ? 'Jadwal' : 'Itinerary' ?>
          </button>
          <button class="nav-link nav-btn-style mb-20" id="v-pills-location-tab" data-bs-toggle="pill" data-bs-target="#v-pills-location" type="button" role="tab" aria-controls="v-pills-location" aria-selected="true">
            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_1652_1208)">
                <path d="M12.166 8.94C11.642 10.002 10.932 11.06 10.206 12.01C9.5173 12.9056 8.7809 13.7635 8 14.58C7.21908 13.7635 6.48268 12.9056 5.794 12.01C5.068 11.06 4.358 10.002 3.834 8.94C3.304 7.867 3 6.862 3 6C3 4.67392 3.52678 3.40215 4.46447 2.46447C5.40215 1.52678 6.67392 1 8 1C9.32608 1 10.5979 1.52678 11.5355 2.46447C12.4732 3.40215 13 4.67392 13 6C13 6.862 12.695 7.867 12.166 8.94ZM8 16C8 16 14 10.314 14 6C14 4.4087 13.3679 2.88258 12.2426 1.75736C11.1174 0.632141 9.5913 0 8 0C6.4087 0 4.88258 0.632141 3.75736 1.75736C2.63214 2.88258 2 4.4087 2 6C2 10.314 8 16 8 16Z"></path>
                <path d="M8 8C7.46957 8 6.96086 7.78929 6.58579 7.41421C6.21071 7.03914 6 6.53043 6 6C6 5.46957 6.21071 4.96086 6.58579 4.58579C6.96086 4.21071 7.46957 4 8 4C8.53043 4 9.03914 4.21071 9.41421 4.58579C9.78929 4.96086 10 5.46957 10 6C10 6.53043 9.78929 7.03914 9.41421 7.41421C9.03914 7.78929 8.53043 8 8 8ZM8 9C8.79565 9 9.55871 8.68393 10.1213 8.12132C10.6839 7.55871 11 6.79565 11 6C11 5.20435 10.6839 4.44129 10.1213 3.87868C9.55871 3.31607 8.79565 3 8 3C7.20435 3 6.44129 3.31607 5.87868 3.87868C5.31607 4.44129 5 5.20435 5 6C5 6.79565 5.31607 7.55871 5.87868 8.12132C6.44129 8.68393 7.20435 9 8 9Z"></path>
              </g>
              <defs>
                <clipPath id="clip0_1652_1208">
                  <rect width="16" height="16"></rect>
                </clipPath>
              </defs>
            </svg>
            <?= $language == 'id' ? 'Termasuk' : 'Includes' ?>
          </button>
          <button class="nav-link nav-btn-style" id="v-pills-gallery-tab" data-bs-toggle="pill" data-bs-target="#v-pills-gallery" type="button" role="tab" aria-controls="v-pills-gallery" aria-selected="true">
            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
              <path d="M3.00592 1.04681C2.2153 1.21868 1.50592 1.81868 1.18717 2.58118C0.987171 3.05931 0.996546 2.77181 1.00592 8.10306L1.0153 12.9531L1.1028 13.1968C1.35592 13.9187 1.81217 14.4406 2.44967 14.7499C2.97467 15.0031 2.51217 14.9843 7.98405 14.9843H12.859L13.1028 14.9124C14.034 14.6437 14.7215 13.9343 14.9372 13.0156C14.9997 12.7593 14.9997 12.6531 14.9934 7.89993L14.984 3.04681L14.8965 2.79681C14.5997 1.95931 14.009 1.37181 13.1715 1.09056L12.9528 1.01556L8.0778 1.00931C4.04655 1.00618 3.16842 1.01243 3.00592 1.04681ZM12.8434 2.07493C13.3622 2.24681 13.7559 2.64056 13.9247 3.15618C13.9778 3.31868 13.984 3.54368 13.9934 6.84368L14.0028 10.3593L12.8528 9.21556C12.2215 8.58431 11.6715 8.05306 11.634 8.03431C11.5372 7.98431 11.2622 7.99056 11.1622 8.04368C11.1153 8.06868 10.5997 8.56868 10.0153 9.15306L8.9528 10.2187L6.74967 8.01868C5.53717 6.80931 4.5153 5.80306 4.4778 5.78431C4.3903 5.74056 4.10905 5.74056 4.02155 5.78431C3.98405 5.80306 3.51217 6.25618 2.97467 6.79368L1.99655 7.76556L2.00905 5.54681C2.01842 3.51243 2.02155 3.31243 2.07467 3.15618C2.19967 2.76868 2.48405 2.41243 2.8153 2.22806C3.02467 2.10931 3.18092 2.05931 3.42155 2.03118C3.52467 2.01868 5.64967 2.00931 8.1403 2.01243C12.4403 2.01556 12.6809 2.01868 12.8434 2.07493ZM7.7653 10.4999L11.2653 13.9999L7.29655 13.9937C3.5528 13.9843 3.31842 13.9812 3.15592 13.9249C2.63717 13.7531 2.2403 13.3562 2.07467 12.8437C2.02467 12.6906 2.01842 12.4937 2.00592 10.9562L1.99342 9.24056L3.1153 8.11868C3.73092 7.50306 4.2403 6.99993 4.24967 6.99993C4.25905 6.99993 5.8403 8.57493 7.7653 10.4999ZM12.7153 10.5437L14.009 11.8374L13.9903 12.2624C13.959 12.8812 13.8278 13.2124 13.4809 13.5437C13.3153 13.7031 12.9778 13.8906 12.7997 13.9218L12.6809 13.9468L11.184 12.4499L9.68717 10.9531L10.5372 10.1031C11.0059 9.63431 11.3965 9.24993 11.4059 9.24993C11.4153 9.24993 12.0028 9.83118 12.7153 10.5437Z"></path>
              <path d="M10.6937 3.08129C10.15 3.26566 9.775 3.63441 9.5875 4.16879C9.5125 4.38441 9.5 4.47191 9.5 4.75004C9.5 5.26254 9.65625 5.64691 10.0031 5.99691C10.575 6.57191 11.5219 6.67191 12.2031 6.23441C12.5469 6.01566 12.7875 5.70316 12.9219 5.30316C13.0344 4.96879 13.0344 4.53129 12.9219 4.19691C12.7344 3.64066 12.3219 3.23441 11.7687 3.06566C11.4531 2.96879 11 2.97504 10.6937 3.08129ZM11.525 4.08129C12.0031 4.27816 12.1219 4.91566 11.7469 5.27191C11.2875 5.70629 10.5312 5.38441 10.5312 4.75004C10.5312 4.46566 10.6781 4.22816 10.9375 4.09066C11.075 4.01879 11.3656 4.01254 11.525 4.08129Z"></path>
            </svg>
            <?= $language == 'id' ? 'Hotel & Penerbangan' : 'Hotel & Flights' ?>
          </button>
          <button class="nav-link nav-btn-style" id="v-pills-review-tab" data-bs-toggle="pill" data-bs-target="#v-pills-review" type="button" role="tab" aria-controls="v-pills-review" aria-selected="true">
            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_1652_1243)">
                <path d="M14 1C14.2652 1 14.5196 1.10536 14.7071 1.29289C14.8946 1.48043 15 1.73478 15 2V10C15 10.2652 14.8946 10.5196 14.7071 10.7071C14.5196 10.8946 14.2652 11 14 11H11.5C11.1895 11 10.8833 11.0723 10.6056 11.2111C10.3279 11.35 10.0863 11.5516 9.9 11.8L8 14.333L6.1 11.8C5.91371 11.5516 5.67214 11.35 5.39443 11.2111C5.11672 11.0723 4.81049 11 4.5 11H2C1.73478 11 1.48043 10.8946 1.29289 10.7071C1.10536 10.5196 1 10.2652 1 10V2C1 1.73478 1.10536 1.48043 1.29289 1.29289C1.48043 1.10536 1.73478 1 2 1H14ZM2 0C1.46957 0 0.960859 0.210714 0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2L0 10C0 10.5304 0.210714 11.0391 0.585786 11.4142C0.960859 11.7893 1.46957 12 2 12H4.5C4.65525 12 4.80836 12.0361 4.94721 12.1056C5.08607 12.175 5.20685 12.2758 5.3 12.4L7.2 14.933C7.29315 15.0572 7.41393 15.158 7.55279 15.2274C7.69164 15.2969 7.84475 15.333 8 15.333C8.15524 15.333 8.30836 15.2969 8.44721 15.2274C8.58607 15.158 8.70685 15.0572 8.8 14.933L10.7 12.4C10.7931 12.2758 10.9139 12.175 11.0528 12.1056C11.1916 12.0361 11.3448 12 11.5 12H14C14.5304 12 15.0391 11.7893 15.4142 11.4142C15.7893 11.0391 16 10.5304 16 10V2C16 1.46957 15.7893 0.960859 15.4142 0.585786C15.0391 0.210714 14.5304 0 14 0L2 0Z"></path>
                <path d="M7.06602 4.75998C6.87123 4.45663 6.58324 4.2247 6.24534 4.09904C5.90743 3.97339 5.53788 3.9608 5.19221 4.06317C4.84654 4.16554 4.54343 4.37734 4.32845 4.66673C4.11346 4.95612 3.99821 5.30748 4.00002 5.66798C4.0002 5.96652 4.08055 6.25953 4.23266 6.5164C4.38478 6.77327 4.60309 6.98458 4.86478 7.12825C5.12647 7.27192 5.42194 7.34267 5.72032 7.33313C6.0187 7.32358 6.30905 7.23408 6.56102 7.07398C6.43002 7.46298 6.18602 7.87798 5.78402 8.29398C5.70711 8.37355 5.66495 8.48041 5.66683 8.59105C5.6687 8.7017 5.71446 8.80707 5.79402 8.88398C5.87359 8.96089 5.98045 9.00305 6.09109 9.00117C6.20174 8.9993 6.30711 8.95355 6.38402 8.87398C7.87002 7.33398 7.67702 5.65998 7.06602 4.76198V4.75998ZM11.066 4.75998C10.8712 4.45663 10.5832 4.2247 10.2453 4.09904C9.90743 3.97339 9.53787 3.9608 9.19221 4.06317C8.84654 4.16554 8.54343 4.37734 8.32845 4.66673C8.11346 4.95612 7.99821 5.30748 8.00002 5.66798C8.0002 5.96652 8.08055 6.25953 8.23266 6.5164C8.38478 6.77327 8.60309 6.98458 8.86478 7.12825C9.12647 7.27192 9.42194 7.34267 9.72032 7.33313C10.0187 7.32358 10.309 7.23408 10.561 7.07398C10.43 7.46298 10.186 7.87798 9.78402 8.29398C9.70711 8.37355 9.66495 8.48041 9.66683 8.59105C9.6687 8.7017 9.71446 8.80707 9.79402 8.88398C9.87359 8.96089 9.98045 9.00305 10.0911 9.00117C10.2017 8.9993 10.3071 8.95355 10.384 8.87398C11.87 7.33398 11.677 5.65998 11.066 4.76198V4.75998Z"></path>
              </g>
              <defs>
                <clipPath id="clip0_1652_1243">
                  <rect width="16" height="16"></rect>
                </clipPath>
              </defs>
            </svg>
            <?= $language == 'id' ? 'Periode Tur' : 'Tour Period' ?>
          </button>
        </div>
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-information" role="tabpanel" aria-labelledby="v-pills-information-tab">
            <div class="tour-information">
              <div class="tour-price">
                <h3>
                  <?= $language == 'id' ? 'Rp' . number_format($data['price_id'], 0, ',', '.') : '$' . number_format($data['price_en'], 2, '.', ',') ?>
                </h3>
                <!-- <del>$768</del> <span>(Per Person )</span> -->
              </div>
              <ul class="tour-info-metalist">
                <li>
                  <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14 7C14 8.85652 13.2625 10.637 11.9497 11.9497C10.637 13.2625 8.85652 14 7 14C5.14348 14 3.36301 13.2625 2.05025 11.9497C0.737498 10.637 0 8.85652 0 7C0 5.14348 0.737498 3.36301 2.05025 2.05025C3.36301 0.737498 5.14348 0 7 0C8.85652 0 10.637 0.737498 11.9497 2.05025C13.2625 3.36301 14 5.14348 14 7ZM7 3.0625C7 2.94647 6.95391 2.83519 6.87186 2.75314C6.78981 2.67109 6.67853 2.625 6.5625 2.625C6.44647 2.625 6.33519 2.67109 6.25314 2.75314C6.17109 2.83519 6.125 2.94647 6.125 3.0625V7.875C6.12502 7.95212 6.14543 8.02785 6.18415 8.09454C6.22288 8.16123 6.27854 8.2165 6.3455 8.25475L9.408 10.0048C9.5085 10.0591 9.62626 10.0719 9.73611 10.0406C9.84596 10.0092 9.93919 9.93611 9.99587 9.83692C10.0525 9.73774 10.0682 9.62031 10.0394 9.50975C10.0107 9.39919 9.93982 9.30426 9.842 9.24525L7 7.62125V3.0625Z"></path>
                  </svg>
                  <?= $language == 'id' ?  $data['duration_id'] :  $data['duration_en'] ?>
                </li>
                <!-- <li>
                                    <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 7C7.92826 7 8.8185 6.63125 9.47487 5.97487C10.1313 5.3185 10.5 4.42826 10.5 3.5C10.5 2.57174 10.1313 1.6815 9.47487 1.02513C8.8185 0.368749 7.92826 0 7 0C6.07174 0 5.1815 0.368749 4.52513 1.02513C3.86875 1.6815 3.5 2.57174 3.5 3.5C3.5 4.42826 3.86875 5.3185 4.52513 5.97487C5.1815 6.63125 6.07174 7 7 7ZM14 12.8333C14 14 12.8333 14 12.8333 14H1.16667C1.16667 14 0 14 0 12.8333C0 11.6667 1.16667 8.16667 7 8.16667C12.8333 8.16667 14 11.6667 14 12.8333Z"></path>
                                    </svg>
                                    Max People 15
                                </li> -->
                <li>
                  <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14 0.43748C14 0.372778 13.9856 0.308889 13.9579 0.250418C13.9302 0.191947 13.8898 0.140348 13.8398 0.0993396C13.7897 0.0583312 13.7312 0.0289339 13.6684 0.0132656C13.6057 -0.00240264 13.5402 -0.00395173 13.4768 0.00872996L9.1875 0.86623L4.89825 0.00872996C4.84164 -0.00258444 4.78336 -0.00258444 4.72675 0.00872996L0.35175 0.88373C0.252608 0.903546 0.163389 0.957088 0.099263 1.03525C0.0351366 1.11342 6.10593e-05 1.21138 0 1.31248L0 13.5625C3.90711e-05 13.6272 0.0144289 13.6911 0.0421328 13.7495C0.0698367 13.808 0.110165 13.8596 0.160212 13.9006C0.210259 13.9416 0.268779 13.971 0.331556 13.9867C0.394332 14.0024 0.459803 14.0039 0.52325 13.9912L4.8125 13.1337L9.10175 13.9912C9.15836 14.0025 9.21664 14.0025 9.27325 13.9912L13.6482 13.1162C13.7474 13.0964 13.8366 13.0429 13.9007 12.9647C13.9649 12.8865 13.9999 12.7886 14 12.6875V0.43748ZM4.375 12.3287V0.97123L4.8125 0.88373L5.25 0.97123V12.3287L4.89825 12.2587C4.84165 12.2474 4.78335 12.2474 4.72675 12.2587L4.375 12.3287ZM8.75 13.0287V1.67123L9.10175 1.74123C9.15836 1.75254 9.21664 1.75254 9.27325 1.74123L9.625 1.67123V13.0287L9.1875 13.1162L8.75 13.0287Z"></path>
                  </svg>
                  <?= $language == 'id' ?  $data['location_id'] :  $data['location_en'] ?>
                </li>
              </ul>
              <div>
                <figure class="wp-block-gallery has-nested-images columns-default is-cropped wp-block-gallery-1 is-layout-flex wp-block-gallery-is-layout-flex">

                  <?php foreach ($imagesDescriptionDestinations as $imagesDescriprionDestination) : ?>
                    <figure class="wp-block-image size-large">
                      <img fetchpriority="high" decoding="async" width="319" height="300" data-id="1665" src="<?= base_url('assets/images/destinations/' . $imagesDescriprionDestination['url']) ?>" alt="<?= $imagesDescriprionDestination['alt_image'] ?>" class="wp-image-1665" sizes=" (max-width: 319px) 100vw, 319px" />
                    </figure>
                  <?php endforeach; ?>
                </figure>
                <?= $language == 'id' ?  $data['description_id'] :  $data['description_en'] ?>

              </div>

              <!-- <p>
                                <span style="font-size: large"><strong>Ingin mengunjungi London dan menjelajahi keindahan dari
                                        jantung negara Inggris dalam waktu singkat?</strong></span>
                            </p>
                            <p>
                                Tour Heart Of England dalam 7 hari ini kami buat khusus
                                untuk Anda!
                            </p>
                            <p>
                                Kami akan mengajak Anda mengagumi London dan daerah
                                sekitarnya yang terletak di jantung negara Inggris.
                            </p>
                            <p>
                                Kami akan membawa Anda mengunjungi tempat-tempat
                                <em>iconic</em> di London, dari Big Ben sampai Istana
                                Buckingham. Anda akan diberi kesempatan berbelanja dengan
                                bebas di Oxford Street, menyusuri Sungai Thames diatas kapal
                                dan menikmati gemerlapnya kota metropolitan London. Di
                                samping itu, dengan menggunakan London sebagai markas, dalam
                                tour ini Anda kami akan mengajak Anda melakukan day trips ke
                                Windsor Castle dan tempat-tempat indah lainnya di jantung
                                negara Inggris.
                            </p>
                            <p>
                                Hubungi kami segera dan bergabunglah dengan kami di Tour
                                Heart of England!
                            </p>

                            <p>
                                Amfiteater Flavian, lebih dikenal oleh dunia sebagai
                                Koloseum, adalah ikon paling dikenal secara universal di
                                Roma. Anda dapat menjelajahi objek wisata populer ini
                                sendiri atau mengikuti tur berpemandu untuk informasi lebih
                                lanjut dan kesempatan untuk bertanya saat Anda menjelajah.
                            </p>

                            <p>
                                Meskipun rusak akibat kebakaran, gempa bumi, dan kelalaian,
                                serta konversinya menjadi benteng keluarga Frangipani,
                                penjarahan batunya untuk pembangunan istana-istana,
                            </p>

                            <div style="height: 40px" aria-hidden="true" class="wp-block-spacer"></div>

                            <figure class="wp-block-gallery has-nested-images columns-default is-cropped wp-block-gallery-1 is-layout-flex wp-block-gallery-is-layout-flex">
                                <figure class="wp-block-image size-large">
                                    <img fetchpriority="high" decoding="async" width="319" height="300" data-id="1665" src="images/blog-details-img2.png" alt="" class="wp-image-1665" srcset="
                          images/blog-details-img2.png         319w,
                          images/blog-details-img2-300x282.png 300w
                        " sizes="(max-width: 319px) 100vw, 319px" />
                                </figure>

                                <figure class="wp-block-image size-large">
                                    <img decoding="async" width="319" height="300" data-id="1664" src="images/blog-details-img3.png" alt="" class="wp-image-1664" srcset="
                          images/blog-details-img3.png         319w,
                          images/blog-details-img3-300x282.png 300w
                        " sizes="(max-width: 319px) 100vw, 319px" />
                                </figure>

                                <figure class="wp-block-image size-large">
                                    <img decoding="async" width="319" height="300" data-id="1663" src="images/blog-details-img4.png" alt="" class="wp-image-1663" srcset="
                          images/blog-details-img4.png         319w,
                          images/blog-details-img4-300x282.png 300w
                        " sizes="(max-width: 319px) 100vw, 319px" />
                                </figure>
                            </figure>

                            <p>
                                Struktur terbesar yang masih ada dari Roma kuno, Koloseum,
                                dimulai oleh Vespasian pada tahun 72 M, dan delapan tahun
                                kemudian diperbesar oleh putranya, Titus, dengan menambahkan
                                lantai keempat. Nama Koloseum berasal dari patung besar Nero
                                yang disebut kolosus setelah Colossus.
                            </p> -->

              <!-- table here -->
              <!-- <div class="tour-info-list-area">
                                <ul class="info-list-1">
                                    <li>
                                        <span>Destination</span><span>Aegean Adventure</span>
                                    </li>
                                    <li>
                                        <span>Departure/Return Location</span><span>Rome F.K. International Airport</span>
                                    </li>
                                    <li>
                                        <span>Departure Time</span><span>Please arrive by 9:15 AM for a departure at 9:30
                                            AM</span>
                                    </li>
                                    <li>
                                        <span>Return Time</span><span>Approximately 10:30 PM</span>
                                    </li>
                                    <li>
                                        <span>Dress Code</span><span>Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit</span>
                                    </li>
                                </ul>
                                <ul class="info-list-1">
                                    <li>
                                        <span>Included Package Facility:</span>
                                        <ul class="info-sublist">
                                            <li>
                                                <i class="bx bx-check"></i>Free Best Tour Guided
                                            </li>
                                            <li><i class="bx bx-check"></i>Free Messages</li>
                                            <li><i class="bx bx-check"></i>No Booking Charge</li>
                                            <li><i class="bx bx-check"></i>Best Rate Gurantee</li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="info-list-1">
                                    <li>
                                        <span>Excludes Package Facility:</span>
                                        <ul class="info-sublist">
                                            <li><i class="bx bx-x"></i>Additional Services</li>
                                            <li><i class="bx bx-x"></i>Insurance</li>
                                            <li><i class="bx bx-x"></i>Transport</li>
                                            <li><i class="bx bx-x"></i>Entry Fees</li>
                                            <li><i class="bx bx-x"></i>Any Private Expenses</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div> -->
              <!-- <div class="faq-area">
                    <h3 class="tour-details-subtitle">
                      Frequently Asked Questions
                    </h3>
                    <div class="faq-wrap sibling-2">
                      <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="heading0">
                            <button
                              class="accordion-button collapsed"
                              type="button"
                              data-bs-toggle="collapse"
                              data-bs-target="#collapse0"
                              aria-expanded="true"
                              aria-controls="collapse0"
                            >
                              01 Who’s the most interesting person you’ve ever
                              met on a plane?
                            </button>
                          </h2>
                          <div
                            id="collapse0"
                            class="accordion-collapse collapse"
                            aria-labelledby="heading0"
                            data-bs-parent="#accordionExample"
                          >
                            <div class="accordion-body">
                              <p>
                                Some of the strangest places on earth are also
                                the most sublime: from the UFO-like dragon's
                                blood trees in Yemen to a rainbow-colored hot
                                spring in Yellowstone to a bridge in Germany
                                that looks like a leftover prop from Lord of the
                                Rings.
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="heading1">
                            <button
                              class="accordion-button collapsed"
                              type="button"
                              data-bs-toggle="collapse"
                              data-bs-target="#collapse1"
                              aria-expanded="true"
                              aria-controls="collapse1"
                            >
                              02 Who’s the most interesting person you’ve ever
                              met on a plane?
                            </button>
                          </h2>
                          <div
                            id="collapse1"
                            class="accordion-collapse collapse"
                            aria-labelledby="heading1"
                            data-bs-parent="#accordionExample"
                          >
                            <div class="accordion-body">
                              <p>
                                Morbi aliquam quis quam in luctus. Nullam
                                tincidunt pulvinar imperdiet. Sed varius, diam
                                vitae posuere semper, libero ex hendrerit nunc,
                                ac sagittis eros metus ut diam. Donec a nibh in
                                libero maximus vehicula. Etiam sit amet
                                condimentum erat. Pellentesque ultrices sagittis
                                turpis, quis tempus ante viverra et.Morbi
                                aliquam quis quam in luctus. Nullam tincidunt
                                pulvinar imperdiet. Sed varius, diam vitae
                                posuere semper, tincidunt pulvinar imperdiet.
                                Sed varius, diam vitae posuere semper.
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="heading2">
                            <button
                              class="accordion-button collapsed"
                              type="button"
                              data-bs-toggle="collapse"
                              data-bs-target="#collapse2"
                              aria-expanded="true"
                              aria-controls="collapse2"
                            >
                              03 What are the most surreal places to visit?
                            </button>
                          </h2>
                          <div
                            id="collapse2"
                            class="accordion-collapse collapse"
                            aria-labelledby="heading2"
                            data-bs-parent="#accordionExample"
                          >
                            <div class="accordion-body">
                              <p>
                                Some of the strangest places on earth are also
                                the most sublime: from the UFO-like dragon's
                                blood trees in Yemen to a rainbow-colored hot
                                spring in Yellowstone to a bridge in Germany
                                that looks like a leftover prop from Lord of the
                                Rings.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->
            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-plan" role="tabpanel" aria-labelledby="v-pills-plan-tab">
            <div class="tour-plan">
              <h3 class="tour-details-subtitle">Jadwal Tur</h3>
              <p style="margin-bottom: 50px;">
                <?= $language == 'id' ? $data['itinerary_notes_id'] : $data['itinerary_notes_en'] ?>
              </p>

              <?php $no = 0;
              foreach ($itineraries as $itinerary) : $no++ ?>
                <div class="tour-plan-single">
                  <div class="plan-serial">
                    <span><?= $no ?></span>
                  </div>
                  <div class="plan-content">
                    <h4 class="plan-title">
                      <?= $language == 'id' ? $itinerary['title_id'] : $itinerary['title_en'] ?>
                    </h4>
                    <?= $language == 'id' ? $itinerary['description_id'] : $itinerary['description_en'] ?>
                  </div>
                </div>
              <?php endforeach; ?>

            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-location" role="tabpanel" aria-labelledby="v-pills-location-tab">
            <div class="tour-location">
              <!-- <h3 class="tour-details-subtitle">Peta Lokasi</h3>
                  <div class="map-area">
                    <iframe
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.512440187116!2d38.75140751491181!3d9.016929893529262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b85c1e4dfcc57%3A0x146fc9fdeab4812e!2sEthiopia%20Hotel!5e0!3m2!1sen!2sbd!4v1674886727390!5m2!1sen!2sbd"
                      width="600"
                      height="450"
                      style="border: 0"
                      allowfullscreen=""
                      loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"
                    ></iframe>
                  </div>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco
                  laboris nisi ut aliquip ex ea commodo consequat. <br /><br />

                  Ini menggunakan kamus lebih dari 200 kata Latin,
                  dikombinasikan dengan beberapa struktur kalimat contoh, untuk
                  menghasilkan Lorem Ipsum yang terlihat wajar. Lorem Ipsum yang
                  dihasilkan oleh karena itu selalu bebas dari pengulangan,
                  humor yang disisipkan, atau kata-kata yang tidak karakteristik
                  dll. Lorem Ipsum menjadi populer pada tahun 1960-an dengan
                  rilis lembaran Letraset yang berisi pasage Lorem Ipsum, dan
                  lebih baru-baru ini dengan perangkat lunak desktop publishing
                  seperti Aldus PageMaker yang menyertakan versi Lorem Ipsum. -->
              <?= $language == 'id' ? $data['includes_id'] : $data['includes_en'] ?>
            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-gallery" role="tabpanel" aria-labelledby="v-pills-gallery-tab">
            <div class="tour-gallery-wrap">
              <?= $language == 'id' ? $data['hotel_flights_id'] : $data['hotel_flights_en'] ?>
              <!-- <h3 class="tour-details-subtitle">
                    Galeri Tur Your Private Europe
                  </h3>
                  <div class="row g-4 justify-content-center">
                    <div class="col-md-4 tour-gallery">
                      <a
                        href="https://astrip-wp.b-cdn.net/wp-content/uploads/2023/01/package-gallery-7.jpg"
                        class="image-open"
                      >
                        <img
                          src="images/package-gallery-7.jpg"
                          class="img-fluid"
                          alt="image"
                        />
                      </a>
                    </div>
                    <div class="col-md-4 tour-gallery">
                      <a
                        href="https://astrip-wp.b-cdn.net/wp-content/uploads/2023/01/package-gallery-9.jpg"
                        class="image-open"
                      >
                        <img
                          src="images/package-gallery-9.jpg"
                          class="img-fluid"
                          alt="image"
                        />
                      </a>
                    </div>
                    <div class="col-md-4 tour-gallery">
                      <a
                        href="https://astrip-wp.b-cdn.net/wp-content/uploads/2023/01/package-gallery-8.jpg"
                        class="image-open"
                      >
                        <img
                          src="images/package-gallery-8.jpg"
                          class="img-fluid"
                          alt="image"
                        />
                      </a>
                    </div>
                    <div class="col-md-4 tour-gallery">
                      <a
                        href="https://astrip-wp.b-cdn.net/wp-content/uploads/2023/01/package-gallery-6.jpg"
                        class="image-open"
                      >
                        <img
                          src="images/package-gallery-6.jpg"
                          class="img-fluid"
                          alt="image"
                        />
                      </a>
                    </div>
                    <div class="col-md-4 tour-gallery">
                      <a
                        href="https://astrip-wp.b-cdn.net/wp-content/uploads/2023/01/package-gallery-3.jpg"
                        class="image-open"
                      >
                        <img
                          src="images/package-gallery-3.jpg"
                          class="img-fluid"
                          alt="image"
                        />
                      </a>
                    </div>
                    <div class="col-md-4 tour-gallery">
                      <a
                        href="https://astrip-wp.b-cdn.net/wp-content/uploads/2023/01/package-gallery-4.jpg"
                        class="image-open"
                      >
                        <img
                          src="images/package-gallery-4.jpg"
                          class="img-fluid"
                          alt="image"
                        />
                      </a>
                    </div>
                    <div class="col-md-4 tour-gallery">
                      <a
                        href="https://astrip-wp.b-cdn.net/wp-content/uploads/2023/01/package-gallery-5.jpg"
                        class="image-open"
                      >
                        <img
                          src="images/package-gallery-5.jpg"
                          class="img-fluid"
                          alt="image"
                        />
                      </a>
                    </div>
                    <div class="col-md-4 tour-gallery">
                      <a
                        href="https://astrip-wp.b-cdn.net/wp-content/uploads/2023/01/package-gallery-2.jpg"
                        class="image-open"
                      >
                        <img
                          src="images/package-gallery-2.jpg"
                          class="img-fluid"
                          alt="image"
                        />
                      </a>
                    </div>
                    <div class="col-md-4 tour-gallery">
                      <a
                        href="https://astrip-wp.b-cdn.net/wp-content/uploads/2023/01/package-gallery-1.jpg"
                        class="image-open"
                      >
                        <img
                          src="images/package-gallery-1.jpg"
                          class="img-fluid"
                          alt="image"
                        />
                      </a>
                    </div>
                  </div> -->
              <!-- <p>
                                <strong>Hotel selama Tour</strong><br />
                                Apabila Anda ingin merubah type hotel atau jenis akomodasi,
                                silakan beritahukan keinginan Anda kepada kami. Kira-kira 1
                                bulan sebelum tanggal keberangkatan, kami akan mengeluarkan
                                daftar akhir nama-nama hotel yang akan Anda tempati.
                            </p>
                            <p>
                                <strong>Penerbangan</strong><br />
                                Saat ini tiket penerbangan tidak termasuk dalam Tour kami
                                ini. Apabila Anda ingin menyerahkan pelayanan pemesanan
                                tiket penerbangan kepada kami, silakan beritahukan kepada
                                kami.
                            </p>
                            <p>&nbsp;</p> -->
            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-review" role="tabpanel" aria-labelledby="v-pills-review-tab">
            <div class="tour-review-area">
              <?= $language == 'id' ? $data['tour_period_id'] : $data['tour_period_en'] ?>
              <!--  <div class="review-progress-box">
                    <div class="row g-4 align-items-center">
                      <div class="col-md-7">
                        <div class="progress-singl">
                          <span>Overall</span>
                          <i class="progress-bar" style="--progress: 80%"
                            >80%</i
                          >
                        </div>

                        <div class="progress-singl">
                          <span>Accommodation</span>
                          <i class="progress-bar" style="--progress: 80%"
                            >80%</i
                          >
                        </div>

                        <div class="progress-singl">
                          <span>Transport</span>
                          <i class="progress-bar" style="--progress: 60%"
                            >60%</i
                          >
                        </div>

                        <div class="progress-singl">
                          <span>Food</span>
                          <i class="progress-bar" style="--progress: 100%"
                            >100%</i
                          >
                        </div>

                        <div class="progress-singl">
                          <span>Destination</span>
                          <i class="progress-bar" style="--progress: 100%"
                            >100%</i
                          >
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="tour-review-number">
                          <span> 8.40 </span>
                          <h2>Excellent</h2>
                        </div>
                      </div>
                    </div>
                  </div>

                  
                  <div class="review-commetn-area">
                    <ul class="review-comment-list">
                      <li>
                        <div class="comment-item">
                          <div class="image"></div>
                          <div class="content">
                            <div class="comment-meta">
                              <h5>Tushar Rahman-</h5>
                              <span>2023-02-17 12:07:20</span>
                            </div>
                            <h3 class="comment-title">It is very impactfull</h3>
                            <p>
                              This theme is very much attractive and looking
                              very much usefull.
                            </p>

                            <ul class="review-item-list">
                              <li>
                                <span>Overall</span>
                                <ul class="star-list">
                                  <li><i class="bi bi-star-fill"></i></li>
                                  <li><i class="bi bi-star-fill"></i></li>
                                  <li><i class="bi bi-star-fill"></i></li>
                                  <li><i class="bi bi-star-fill"></i></li>
                                  <li><i class="bi bi-star"></i></li>
                                </ul>
                              </li>
                              <li>
                                <span>Accommodation</span>
                                <ul class="star-list">
                                  <li><i class="bi bi-star-fill"></i></li>
                                  <li><i class="bi bi-star-fill"></i></li>
                                  <li><i class="bi bi-star-fill"></i></li>
                                  <li><i class="bi bi-star-fill"></i></li>
                                  <li><i class="bi bi-star"></i></li>
                                </ul>
                              </li>
                              <li>
                                <span>Transport</span>
                                <ul class="star-list">
                                  <li><i class="bi bi-star-fill"></i></li>
                                  <li><i class="bi bi-star-fill"></i></li>
                                  <li><i class="bi bi-star-fill"></i></li>
                                  <li><i class="bi bi-star"></i></li>
                                  <li><i class="bi bi-star"></i></li>
                                </ul>
                              </li>
                              <li>
                                <span>Food</span>
                                <ul class="star-list">
                                  <li><i class="bi bi-star-fill"></i></li>
                                  <li><i class="bi bi-star-fill"></i></li>
                                  <li><i class="bi bi-star-fill"></i></li>
                                  <li><i class="bi bi-star-fill"></i></li>
                                  <li><i class="bi bi-star-fill"></i></li>
                                </ul>
                              </li>
                              <li>
                                <span>Destination</span>
                                <ul class="star-list">
                                  <li><i class="bi bi-star-fill"></i></li>
                                  <li><i class="bi bi-star-fill"></i></li>
                                  <li><i class="bi bi-star-fill"></i></li>
                                  <li><i class="bi bi-star-fill"></i></li>
                                  <li><i class="bi bi-star-fill"></i></li>
                                </ul>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>

                  
                  <div class="review-form-area">
                    <h3 class="tour-details-subtitle">Write a review:</h3>
                    <div class="contact-from-wrapper">
                      <form
                        action="#tour/south-america/"
                        method="post"
                        id="review_rating"
                        name="review_rating"
                      >
                        <input type="hidden" value="1" name="customer_id" />
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-inner">
                              <input
                                type="text"
                                name="customer_name"
                                value=""
                                placeholder="Your Name:"
                              />
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-inner">
                              <input
                                type="text"
                                name="customer_email"
                                value=""
                                placeholder="Your Email Address:"
                              />
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <div class="form-inner">
                              <input
                                type="text"
                                name="review_title"
                                placeholder="Reivew Title:"
                              />
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <div class="form-inner">
                              <textarea
                                name="review_message"
                                rows="5"
                                placeholder="Review Message"
                              ></textarea>
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <div class="star-rating-wrapper">
                              <ul class="star-rating-list"></ul>
                              <ul class="review-item-list">
                                <li>
                                  <span>Overall</span>
                                  <ul class="star-list">
                                    <fieldset class="rating">
                                      <input
                                        type="radio"
                                        class="rating_last"
                                        id="overallratingstar5"
                                        name="overallrating"
                                        value="5"
                                      />
                                      <label
                                        for="overallratingstar5"
                                        title="5 stars"
                                      ></label>
                                      <input
                                        type="radio"
                                        id="overallratingstar4"
                                        name="overallrating"
                                        value="4"
                                      />
                                      <label
                                        for="overallratingstar4"
                                        title="4 stars"
                                      ></label>
                                      <input
                                        type="radio"
                                        id="overallratingstar3"
                                        name="overallrating"
                                        value="3"
                                      />
                                      <label
                                        for="overallratingstar3"
                                        title="3 stars"
                                      ></label>
                                      <input
                                        type="radio"
                                        id="overallratingstar2"
                                        name="overallrating"
                                        value="2"
                                      />
                                      <label
                                        for="overallratingstar2"
                                        title="2 stars"
                                      ></label>
                                      <input
                                        type="radio"
                                        id="overallratingstar1"
                                        name="overallratingrating"
                                        value="1"
                                      />
                                      <label
                                        for="overallratingstar1"
                                        title="1 star"
                                      ></label>
                                    </fieldset>
                                  </ul>
                                </li>
                                <li>
                                  <span>Accommodation</span>
                                  <ul class="star-list">
                                    <fieldset class="rating">
                                      <input
                                        type="radio"
                                        class="rating_last"
                                        id="accommodationratingstar5"
                                        name="accommodationrating"
                                        value="5"
                                      />
                                      <label
                                        for="accommodationratingstar5"
                                        title="5 stars"
                                      ></label>
                                      <input
                                        type="radio"
                                        id="accommodationratingstar4"
                                        name="accommodationrating"
                                        value="4"
                                      />
                                      <label
                                        for="accommodationratingstar4"
                                        title="4 stars"
                                      ></label>
                                      <input
                                        type="radio"
                                        id="accommodationratingstar3"
                                        name="accommodationrating"
                                        value="3"
                                      />
                                      <label
                                        for="accommodationratingstar3"
                                        title="3 stars"
                                      ></label>
                                      <input
                                        type="radio"
                                        id="accommodationratingstar2"
                                        name="accommodationrating"
                                        value="2"
                                      />
                                      <label
                                        for="accommodationratingstar2"
                                        title="2 stars"
                                      ></label>
                                      <input
                                        type="radio"
                                        id="accommodationratingstar1"
                                        name="accommodationratingrating"
                                        value="1"
                                      />
                                      <label
                                        for="accommodationratingstar1"
                                        title="1 star"
                                      ></label>
                                    </fieldset>
                                  </ul>
                                </li>
                                <li>
                                  <span>Transport</span>
                                  <ul class="star-list">
                                    <fieldset class="rating">
                                      <input
                                        type="radio"
                                        class="rating_last"
                                        id="transportratingstar5"
                                        name="transportrating"
                                        value="5"
                                      />
                                      <label
                                        for="transportratingstar5"
                                        title="5 stars"
                                      ></label>
                                      <input
                                        type="radio"
                                        id="transportratingstar4"
                                        name="transportrating"
                                        value="4"
                                      />
                                      <label
                                        for="transportratingstar4"
                                        title="4 stars"
                                      ></label>
                                      <input
                                        type="radio"
                                        id="transportratingstar3"
                                        name="transportrating"
                                        value="3"
                                      />
                                      <label
                                        for="transportratingstar3"
                                        title="3 stars"
                                      ></label>
                                      <input
                                        type="radio"
                                        id="transportratingstar2"
                                        name="transportrating"
                                        value="2"
                                      />
                                      <label
                                        for="transportratingstar2"
                                        title="2 stars"
                                      ></label>
                                      <input
                                        type="radio"
                                        id="transportratingstar1"
                                        name="transportratingrating"
                                        value="1"
                                      />
                                      <label
                                        for="transportratingstar1"
                                        title="1 star"
                                      ></label>
                                    </fieldset>
                                  </ul>
                                </li>
                                <li>
                                  <span>Food</span>
                                  <ul class="star-list">
                                    <fieldset class="rating">
                                      <input
                                        type="radio"
                                        class="rating_last"
                                        id="foodratingstar5"
                                        name="foodrating"
                                        value="5"
                                      />
                                      <label
                                        for="foodratingstar5"
                                        title="5 stars"
                                      ></label>
                                      <input
                                        type="radio"
                                        id="foodratingstar4"
                                        name="foodrating"
                                        value="4"
                                      />
                                      <label
                                        for="foodratingstar4"
                                        title="4 stars"
                                      ></label>
                                      <input
                                        type="radio"
                                        id="foodratingstar3"
                                        name="foodrating"
                                        value="3"
                                      />
                                      <label
                                        for="foodratingstar3"
                                        title="3 stars"
                                      ></label>
                                      <input
                                        type="radio"
                                        id="foodratingstar2"
                                        name="foodrating"
                                        value="2"
                                      />
                                      <label
                                        for="foodratingstar2"
                                        title="2 stars"
                                      ></label>
                                      <input
                                        type="radio"
                                        id="foodratingstar1"
                                        name="foodratingrating"
                                        value="1"
                                      />
                                      <label
                                        for="foodratingstar1"
                                        title="1 star"
                                      ></label>
                                    </fieldset>
                                  </ul>
                                </li>
                                <li>
                                  <span>Destination</span>
                                  <ul class="star-list">
                                    <fieldset class="rating">
                                      <input
                                        type="radio"
                                        class="rating_last"
                                        id="destinationratingstar5"
                                        name="destinationrating"
                                        value="5"
                                      />
                                      <label
                                        for="destinationratingstar5"
                                        title="5 stars"
                                      ></label>
                                      <input
                                        type="radio"
                                        id="destinationratingstar4"
                                        name="destinationrating"
                                        value="4"
                                      />
                                      <label
                                        for="destinationratingstar4"
                                        title="4 stars"
                                      ></label>
                                      <input
                                        type="radio"
                                        id="destinationratingstar3"
                                        name="destinationrating"
                                        value="3"
                                      />
                                      <label
                                        for="destinationratingstar3"
                                        title="3 stars"
                                      ></label>
                                      <input
                                        type="radio"
                                        id="destinationratingstar2"
                                        name="destinationrating"
                                        value="2"
                                      />
                                      <label
                                        for="destinationratingstar2"
                                        title="2 stars"
                                      ></label>
                                      <input
                                        type="radio"
                                        id="destinationratingstar1"
                                        name="destinationratingrating"
                                        value="1"
                                      />
                                      <label
                                        for="destinationratingstar1"
                                        title="1 star"
                                      ></label>
                                    </fieldset>
                                  </ul>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <span
                              class="rating_all_fields_error d-none text-start text-danger"
                              >Please fill up all the Fields</span
                            >
                          </div>
                          <div class="col-lg-12">
                            <input
                              type="hidden"
                              id="custom_rating_nonce"
                              name="custom_rating_nonce"
                              value="037c7e9412"
                            /><input
                              type="hidden"
                              name="_wp_http_referer"
                              value="/tour/south-america/"
                            />
                            <button
                              type="submit"
                              id="ratingFormSubmit"
                              value="ratingFormSubmit"
                              class="eg-btn btn--primary btn--lg submit-btn"
                            >
                              Submit Now
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>-->
            </div>
            <!-- <p>
                            <strong>Periode penawaran Tour</strong><br />
                            Kami menawarkan Tour Heart of England ini sepanjang tahun.
                        </p>
                        <p>
                            <strong>Periode terbaik untuk berkunjung</strong><br />
                            Antara bulan Maret dan November adalah waktu yang baik untuk
                            mengunjungi Inggris dan UK.&nbsp;Tetapi, untuk benar-benar
                            menikmati kunjungan Anda secara maximal, bulan April, Mei,
                            September, Oktober dan November bisa dikatakan adalah waktu
                            yang terbaik dikarenakan cuaca yang baik, tidak terlalu ramai
                            dan banyak tempat wisata yang aktif.&nbsp;Apabila Anda tidak
                            keberatan dengan suhu yang dingin, kunjungi Inggris dan UK di
                            bulan Desember untuk menikmati suasana Natal.
                        </p> -->
          </div>
        </div>
      </div>
      <div class="col-lg-3 ps-lg-4">
        <div class="booking-form-box">
          <!-- <h3>Book this Tour</h3>
              <hr class="separate-line" /> -->
          <!-- <div
                class="nav flex-row justify-content-center gap-5 nav-pills mb-40"
                role="tablist"
              >
                <button
                  class="nav-link show active eg-btn btn--primary-outline btn--sm"
                  id="v-pills-booking-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-booking"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-booking"
                  aria-selected="true"
                >
                  Booking Form
                </button>
                <button
                  class="nav-link eg-btn btn--primary-outline btn--sm"
                  id="v-pills-contact-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-contact"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-contact"
                  aria-selected="true"
                >
                  Enquery Form
                </button>
              </div> -->
          <div class="tab-content" id="v-pills-tabContent2">
            <div class="tab-pane fade show active" id="v-pills-booking" role="tabpanel" aria-labelledby="v-pills-booking-tab">
              <div class="sidebar-booking-form">
                <input id="productId" type="hidden" value="2401" />
                <!-- <hr class="separate-line2" /> -->

                <form class="cart" action="#" name="review-rating-from" method="post" enctype="multipart/form-data">
                  <!-- <div class="booking-form-item-type mb-40">
                        <input type="hidden" value="2472" name="tour_id" />
                        <h5>Select Your Tour Date</h5>

                        <div class="radio-item">
                          <label>
                            <input
                              name="tour_booking_date"
                              value="November 1, 2023|November 10, 2023"
                              type="radio"
                              checked=""
                            />
                            <div class="tour-date">
                              <div class="start-date">
                                <span>Check In</span>
                                <span> November 1, 2023 </span>
                              </div>
                              <div class="radio-arrow">
                                <i class="bi bi-arrow-right"></i>
                              </div>
                              <div class="end-date">
                                <span>Check Out</span>
                                <span>November 10, 2023</span>
                              </div>
                            </div>
                          </label>
                        </div>
                        <div class="radio-item">
                          <label>
                            <input
                              name="tour_booking_date"
                              value="November 18, 2023|November 25, 2023"
                              type="radio"
                            />
                            <div class="tour-date">
                              <div class="start-date">
                                <span>Check In</span>
                                <span> November 18, 2023 </span>
                              </div>
                              <div class="radio-arrow">
                                <i class="bi bi-arrow-right"></i>
                              </div>
                              <div class="end-date">
                                <span>Check Out</span>
                                <span>November 25, 2023</span>
                              </div>
                            </div>
                          </label>
                        </div>
                        <div class="radio-item">
                          <span class="custom-date">Custom Date</span>
                          <label
                            ><input
                              name="tour_booking_date"
                              id="customTourBookingDate"
                              type="radio" /><input
                              type="text"
                              name="checkIn"
                              id="customDateDatepicker"
                              value="2024-03-22"
                              class="calendar"
                              autocomplete="off"
                          /></label>
                        </div>
                      </div>
                      <div class="booking-form-item-type">
                        <div class="number-input-item adults">
                          <label for="adultsPerson" class="number-input-lable"
                            ><span>Adult: </span
                            ><span> $625 <del>$768</del></span></label
                          >
                          <div class="number-input">
                            <span class="minus-qty">-</span>
                            <input
                              id="adultsPerson"
                              name="adult_person"
                              value="1"
                              type="number"
                              autocomplete="off"
                            />
                            <span class="plus-qty">+</span>
                          </div>
                        </div>
                        <div class="number-input-item children">
                          <label for="childrenPerson" class="number-input-lable"
                            ><span> Children: </span><span>$40</span></label
                          >
                          <div class="number-input">
                            <span class="minus-qty">-</span>
                            <input
                              id="childrenPerson"
                              name="children_person"
                              value="0"
                              type="number"
                              autocomplete="off"
                            />
                            <span class="plus-qty">+</span>
                          </div>
                        </div>
                      </div>
                      <hr class="separate-line2" />
                      <div class="booking-form-item-type">
                        <h5>Other Extra Services</h5>
                        <div class="checkbox-container">
                          <label class="check-container"
                            >Airport Transport
                            <input
                              type="checkbox"
                              class="services_check"
                              name="services_list[]"
                              value="0"
                            />
                            <span class="checkmark"></span>
                            <span class="price">$10 </span> </label
                          ><label class="check-container"
                            >All Museum Tickets
                            <input
                              type="checkbox"
                              class="services_check"
                              name="services_list[]"
                              value="1"
                            />
                            <span class="checkmark"></span>
                            <span class="price">$50 </span> </label
                          ><label class="check-container"
                            >Typical Souvenir
                            <input
                              type="checkbox"
                              class="services_check"
                              name="services_list[]"
                              value="2"
                            />
                            <span class="checkmark"></span>
                            <span class="price">$15 </span>
                          </label>
                        </div>
                      </div>

                      <div class="total-price">
                        <span class="astrip-spinner"></span> Total Price
                        <span class="main-price">$625</span>
                      </div> -->

                  <button type="submit" class="eg-btn btn--primary btn--lg w-100 mt-3" name="add-to-cart" value="2401">
                    Hubungi Kami Segera
                  </button>
                </form>
              </div>
            </div>
            <!-- <div
                  class="tab-pane fade"
                  id="v-pills-contact"
                  role="tabpanel"
                  aria-labelledby="v-pills-contact-tab"
                >
                  <form
                    class="banner-form"
                    id="enquiryForm"
                    method="post"
                    name="enquirie_form"
                  >
                    <input
                      type="hidden"
                      name="enquiries_package_id"
                      value="2472"
                    />
                    <div class="search-box-single destination-box">
                      <div class="searchbox-icon">
                        <i class="bi bi-pencil-fill"></i>
                      </div>
                      <div class="searchbox-input">
                        <input
                          type="text"
                          name="enquiries_fullname"
                          placeholder="Full Name*"
                        />
                      </div>
                    </div>
                    <span
                      class="enquiries_fullname_error d-none text-start text-danger"
                      >Full Name field is required</span
                    >
                    <div class="search-box-single destination-box">
                      <div class="searchbox-icon">
                        <i class="bi bi-envelope-fill"></i>
                      </div>
                      <div class="searchbox-input">
                        <input
                          type="text"
                          name="enquiries_email_address"
                          placeholder="E-mail*"
                        />
                      </div>
                    </div>
                    <span
                      class="enquiries_email_address_error d-none text-start text-danger"
                      >E-mail field Address is required</span
                    >
                    <div class="search-box-single destination-box">
                      <div class="searchbox-icon">
                        <i class="bi bi-telephone"></i>
                      </div>
                      <div class="searchbox-input">
                        <input
                          type="text"
                          name="enquiries_phone"
                          placeholder="Phone Number"
                        />
                      </div>
                    </div>
                    <div class="search-box-single">
                      <div class="searchbox-icon">
                        <i class="bi bi-person-fill"></i>
                      </div>
                      <div class="searchbox-input">
                        <input
                          type="number"
                          name="enquiries_people"
                          placeholder="People"
                        />
                      </div>
                    </div>
                    <div class="search-box-single">
                      <div class="searchbox-icon">
                        <i class="bi bi-tags-fill"></i>
                      </div>
                      <div class="searchbox-input">
                        <input
                          type="number"
                          name="enquiries_number_of_tickets"
                          placeholder="Number of tickets"
                        />
                      </div>
                    </div>
                    <div class="search-box-single">
                      <div class="searchbox-icon">
                        <i class="bi bi-chat-left-text-fill"></i>
                      </div>
                      <div class="searchbox-input">
                        <textarea
                          name="enquiries_message"
                          rows="6"
                          placeholder="Your Enquiry*"
                        ></textarea>
                      </div>
                    </div>
                    <span
                      class="enquiries_message_error d-none text-start text-danger"
                      >Enquiry field is required</span
                    >
                    <input
                      type="hidden"
                      id="custom_enquiries_nonce"
                      name="custom_enquiries_nonce"
                      value="c8dd0b6931"
                    /><input
                      type="hidden"
                      name="_wp_http_referer"
                      value="/tour/south-america/"
                    />
                    <div class="enquiries_success_message"></div>
                    <button
                      type="submit"
                      value="enquiriesForm"
                      class="eg-btn btn--primary btn--lg w-100 mt-3"
                    >
                      Submit Now
                    </button>
                  </form>
                </div> -->
          </div>
        </div>

        <!-- <div
              id="egns_single_tour_widget-7"
              class="tour-widget-item widget_egns_single_tour_widget"
            >
              <div class="sidebar-offer">
                <div class="offer-badge">
                  <img src="images/Frame.svg" alt="offer-img" />
                  <div class="offer-text">
                    <h5>
                      <span>25%</span> <br />
                      Off
                    </h5>
                  </div>
                </div>
                <div class="offer-content">
                  <div class="review-area"></div>
                  <h4>
                    <a
                      href="#tour/aegean-beach/"
                      >Aegean Beach</a
                    >
                  </h4>
                  <div class="price">
                    <span class="tt"
                      >5 Days 6 Nights <span>From $750</span>
                      <del>/$1000</del></span
                    >
                  </div>
                </div>
                <img
                  width="435"
                  height="556"
                  src="images/tour-pack-1.jpg"
                  class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                  alt=""
                  decoding="async"
                  srcset="
                    images/tour-pack-1.jpg         435w,
                    images/tour-pack-1-235x300.jpg 235w,
                    images/tour-pack-1-253x323.jpg 253w
                  "
                  sizes="(max-width: 435px) 100vw, 435px"
                />
              </div>
            </div> -->
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>