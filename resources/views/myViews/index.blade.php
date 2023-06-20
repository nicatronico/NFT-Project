
<x-MyComponents.maintemplate>

  <div class="z-10">
    <x-MyComponents.header color="transparent"/>
  </div>
  <hr class="w-screen border-[1px] border-gray-700 mt-[10px]">

  <div class="flex flex-col text-white relative left-[-285px] top-[100px] gap-y-[30px]">
      <h1 class="w-[290px] text-[30px] font-bold flex wrap text-gray-100">
        <p>Discover, and collect extraordinary <span class="text-transparent bg-clip-text bg-gradient-to-t from-indigo-500 via-purple-500 to-pink-500">Monster</span> NFT's</p>
      </h1>
      <p class="text-gray-300">Marketplace for monster character collections non fungible token NFTs</p>
      
      <div class="flex gap-x-[20px] z-10">
          <button class="w-[130px] h-[45px] bg-transparent border-[1px] border-blue-700 text-white rounded-full font-bold">
                 
              <a href="{{url('/explore')}}" class="w-[130px] h-[45px] flex justify-center items-center gap-x-[10px]">               
                <svg width="16" height="21" viewBox="0 0 16 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11.5018 14.208L12.7719 12.0081C15.6056 7.09999 15.241 2.93672 14.9644 1.41039C14.9351 1.24485 14.8342 1.10183 14.6899 1.01705C14.5447 0.932505 14.3707 0.916004 14.2117 0.971335C12.7383 1.48437 8.90813 3.22727 6.07185 8.13984L4.80142 10.3403L4.23711 10.3794C3.14896 10.4556 2.16906 11.0678 1.6233 12.0131L0.107343 14.6388C0.0175629 14.7943 0.0203742 14.9876 0.114687 15.1409C0.209878 15.294 0.381355 15.3818 0.560862 15.3695L2.38816 15.2526C2.90103 15.2202 3.41204 15.3391 3.85737 15.5962L4.82773 16.1565L4.09308 17.4289C3.95793 17.663 4.03802 17.9619 4.27155 18.0968L5.04851 18.5453C5.28205 18.6802 5.58096 18.6001 5.71611 18.366L6.45076 17.0935L7.42057 17.6535C7.8659 17.9106 8.22557 18.2929 8.45358 18.7552L9.26515 20.395C9.34425 20.5566 9.50608 20.6611 9.68622 20.6671C9.86613 20.6721 10.035 20.5779 10.1248 20.4223L11.6407 17.7966C12.1858 16.8525 12.2255 15.6974 11.7486 14.7162L11.5018 14.208ZM10.142 8.82732C9.33605 8.36201 9.05917 7.33044 9.52448 6.5245C9.99011 5.718 11.0216 5.44256 11.8275 5.90787C12.6329 6.37286 12.9101 7.40387 12.4445 8.21037C11.9792 9.01631 10.9474 9.29231 10.142 8.82732Z" fill="white"/>
                </svg> 
                <span>Explore</span>                
              </a>
          </button> 
          <button class="w-[130px] h-[45px] flex justify-center items-center gap-x-[10px] bg-white text-gray-800 rounded-full font-bold">
              <a href="{{url('/create_item')}}" class="w-[130px] h-[45px] flex justify-center items-center gap-x-[10px]">               
                 <svg width="18" height="18" viewBox="0 0 18 18" fill="blue" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.991 14.8704L15.549 1.02157C15.4928 0.7029 15.189 0.490244 14.8702 0.546298L1.02141 2.98821C0.702743 3.04438 0.48993 3.34829 0.546102 3.66696L2.98801 17.5158C3.015 17.6689 3.10168 17.8049 3.22899 17.8941C3.32817 17.9635 3.44563 18 3.56508 18C3.59895 18 3.63301 17.9971 3.6668 17.9911L17.5156 15.5492C17.6687 15.5223 17.8047 15.4356 17.8939 15.3083C17.983 15.181 18.0179 15.0235 17.991 14.8704ZM3.66821 7.8763C3.61203 7.55763 3.82485 7.25372 4.14352 7.19755L13.3761 5.56958C13.6951 5.51341 13.9987 5.72618 14.0549 6.04485C14.1111 6.36353 13.8983 6.66743 13.5796 6.7236L4.34699 8.35161C4.31258 8.35767 4.27832 8.3606 4.24457 8.3606C3.96555 8.3606 3.71832 8.1606 3.66821 7.8763ZM11.316 11.8826L5.16098 12.9679C5.12656 12.974 5.09231 12.9769 5.05856 12.9769C4.77953 12.9769 4.53231 12.7769 4.48219 12.4926C4.42602 12.1739 4.63883 11.87 4.9575 11.8138L11.1125 10.7285C11.4314 10.6723 11.7351 10.8851 11.7913 11.2038C11.8475 11.5225 11.6347 11.8264 11.316 11.8826ZM13.9865 9.03177L4.75395 10.6597C4.71953 10.6658 4.68528 10.6687 4.65153 10.6687C4.3725 10.6687 4.12528 10.4687 4.07516 10.1844C4.01899 9.86575 4.2318 9.56185 4.55047 9.50567L13.7831 7.8777C14.102 7.82153 14.4057 8.03431 14.4619 8.35298C14.518 8.67169 14.3052 8.9756 13.9865 9.03177Z" fill="#5142FC"/>
                 </svg>     
                 <span>Create</span>
              </a>
          </button> 
      </div>    
  </div>


  <svg class="w-screen h-[750px] relative top-[-390px]" viewBox="0 0 1920 820" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M1236.49 632.452C1232.15 630.976 1227.93 629.174 1223.88 627.065C1186.64 607.712 1173.45 570.482 1159.49 531.067C1149.67 503.369 1139.52 474.723 1120.25 452.732C1101.76 431.616 1075.68 417.727 1050.46 404.268C1036.72 396.953 1022.52 389.386 1009.55 380.697C970.411 354.458 942.899 305.78 966.704 272.906C984.982 247.667 1023.49 245.695 1044.81 246.764C1053.32 247.191 1062 248.05 1070.4 248.883C1090.56 250.879 1111.41 252.946 1131.02 249.075C1159.04 243.531 1181.84 226.534 1203.88 210.098C1216.4 200.704 1229.38 191.077 1243.3 183.454C1284.8 160.739 1340.46 157.678 1392.22 175.268C1435.69 190.042 1471.17 217.161 1492.14 251.635C1501.28 266.687 1508.26 283.265 1515 299.313C1527.8 329.747 1539.89 358.496 1565.67 378.708C1579.35 389.444 1595.93 396.597 1611.95 403.518C1619.79 406.907 1627.9 410.406 1635.62 414.302C1652.92 423.024 1682.4 441.942 1685.49 470.646C1689.28 505.849 1648.23 531.517 1607.51 533.403C1590.82 534.172 1573.73 532.484 1557.2 530.81C1535.69 528.678 1513.44 526.473 1492.2 529.785C1452.96 535.934 1421.34 559.892 1390.76 583.066C1382.73 589.158 1374.42 595.431 1366.11 601.31C1344.47 616.625 1288.59 650.162 1236.49 632.452ZM1391.36 177.64C1340.37 160.309 1285.54 163.304 1244.71 185.656C1230.94 193.196 1218.05 202.816 1205.58 212.111C1183.32 228.718 1160.3 245.896 1131.66 251.546C1111.65 255.495 1090.6 253.416 1070.22 251.397C1061.86 250.569 1053.21 249.713 1044.79 249.3C1024.01 248.26 986.531 250.139 968.944 274.418C946.054 306.059 972.978 353.197 1010.99 378.701C1023.82 387.33 1037.97 394.843 1051.65 402.12C1077.1 415.677 1103.43 429.692 1122.27 451.198C1141.87 473.587 1152.11 502.468 1162.01 530.405C1175.79 569.306 1188.81 606.067 1225.06 624.889C1228.99 626.934 1233.08 628.681 1237.28 630.112C1288.14 647.397 1343.1 614.367 1364.37 599.36C1372.63 593.534 1380.93 587.242 1388.95 581.163C1419.79 557.801 1451.66 533.636 1491.58 527.389C1513.15 524.01 1535.58 526.233 1557.28 528.387C1573.71 530.012 1590.7 531.699 1607.18 530.936C1646.61 529.114 1686.39 504.518 1682.76 470.809C1679.69 442.301 1647.91 423.366 1634.39 416.546C1626.75 412.694 1618.68 409.21 1610.88 405.842C1594.68 398.843 1577.94 391.608 1563.94 380.641C1537.59 359.977 1524.81 329.574 1512.45 300.159C1505.73 284.223 1498.8 267.695 1489.75 252.821C1469.14 218.877 1434.19 192.203 1391.36 177.648L1391.36 177.64Z" fill="#6A1AB7"/>
      <g filter="url(#filter0_f_201_1095)">
    <ellipse cx="264.458" cy="229.048" rx="264.458" ry="163.634" fill="url(#paint0_radial_201_1095)" fill-opacity="0.24"/>
    </g>
    <g filter="url(#filter1_f_201_1095)">
    <ellipse cx="1632.79" cy="572.214" rx="157.791" ry="97.6336" transform="rotate(180 1632.79 572.214)" fill="url(#paint1_linear_201_1095)" fill-opacity="0.3"/>
    </g>
    <g filter="url(#filter2_f_201_1095)">
    <ellipse cx="88.9941" cy="55.0654" rx="88.9941" ry="55.0654" transform="matrix(-1 0 0 1 1920 0)" fill="url(#paint2_linear_201_1095)" fill-opacity="0.7"/>
    </g>
    <ellipse cx="694" cy="541.521" rx="11" ry="10.9903" fill="url(#paint3_linear_201_1095)"/>
    <circle cx="1052" cy="251" r="22" fill="url(#paint4_linear_201_1095)"/>
    <ellipse cx="1579" cy="607.986" rx="16" ry="15.9859" fill="url(#paint5_linear_201_1095)"/>
    <ellipse cx="1203" cy="223.802" rx="8" ry="7.99294" fill="url(#paint6_linear_201_1095)"/>
    <path d="M1572.5 176.787C1565.74 176.78 1559.26 174.096 1554.48 169.325C1549.7 164.554 1547.01 158.085 1547 151.338C1547.01 144.591 1549.7 138.122 1554.48 133.351C1559.26 128.58 1565.74 125.896 1572.5 125.889C1579.27 125.896 1585.75 128.58 1590.53 133.351C1595.31 138.122 1598 144.591 1598.01 151.338C1598 158.085 1595.31 164.554 1590.53 169.325C1585.75 174.096 1579.27 176.78 1572.5 176.787ZM1572.5 128.102C1566.33 128.107 1560.41 130.557 1556.04 134.913C1551.68 139.27 1549.22 145.176 1549.21 151.338C1549.22 157.498 1551.67 163.404 1556.04 167.76C1560.4 172.116 1566.32 174.567 1572.5 174.574C1578.67 174.567 1584.59 172.116 1588.95 167.76C1593.32 163.404 1595.78 157.498 1595.78 151.338C1595.78 145.179 1593.32 139.274 1588.96 134.918C1584.59 130.563 1578.68 128.111 1572.5 128.102Z" fill="#6A1AB7"/>
    <path d="M823.504 392.898C816.742 392.891 810.26 390.207 805.478 385.436C800.697 380.665 798.008 374.196 798 367.449C798.008 360.702 800.697 354.233 805.478 349.462C810.26 344.691 816.742 342.008 823.504 342C830.266 342.008 836.749 344.691 841.53 349.462C846.311 354.233 849.001 360.702 849.008 367.449C849.001 374.196 846.311 380.665 841.53 385.436C836.749 390.207 830.266 392.891 823.504 392.898ZM823.504 344.213C817.329 344.219 811.409 346.668 807.042 351.025C802.675 355.381 800.218 361.288 800.211 367.449C800.218 373.609 802.674 379.515 807.039 383.871C811.405 388.227 817.323 390.678 823.497 390.686C829.671 390.678 835.589 388.227 839.955 383.871C844.32 379.515 846.776 373.609 846.784 367.449C846.776 361.29 844.321 355.385 839.957 351.03C835.593 346.674 829.677 344.222 823.504 344.213Z" fill="#6A1AB7"/>
    <defs>
    <filter id="filter0_f_201_1095" x="-150" y="-84.5855" width="828.915" height="627.268" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
    <feGaussianBlur stdDeviation="75" result="effect1_foregroundBlur_201_1095"/>
    </filter>
    <filter id="filter1_f_201_1095" x="1325" y="324.581" width="615.582" height="495.267" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
    <feGaussianBlur stdDeviation="75" result="effect1_foregroundBlur_201_1095"/>
    </filter>
    <filter id="filter2_f_201_1095" x="1592.01" y="-150" width="477.988" height="410.131" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
    <feGaussianBlur stdDeviation="75" result="effect1_foregroundBlur_201_1095"/>
    </filter>
    <radialGradient id="paint0_radial_201_1095" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(305.659 244.463) rotate(34.1621) scale(179.488 167.508)">
    <stop stop-color="#2B1867"/>
    <stop offset="0.487063" stop-color="#382383"/>
    <stop offset="0.781641" stop-color="#452896"/>
    <stop offset="1" stop-color="#76248E"/>
    </radialGradient>
    <linearGradient id="paint1_linear_201_1095" x1="1568.76" y1="521.275" x2="1663.02" y2="688.356" gradientUnits="userSpaceOnUse">
    <stop stop-color="#2B1867"/>
    <stop offset="0.487063" stop-color="#382383"/>
    <stop offset="0.781641" stop-color="#452896"/>
    <stop offset="1" stop-color="#76248E"/>
    </linearGradient>
    <linearGradient id="paint2_linear_201_1095" x1="52.8805" y1="26.3356" x2="106.043" y2="120.569" gradientUnits="userSpaceOnUse">
    <stop stop-color="#2B1867"/>
    <stop offset="0.487063" stop-color="#3F298D"/>
    <stop offset="0.781641" stop-color="#453D9A"/>
    <stop offset="1" stop-color="#5D6AA7"/>
    </linearGradient>
    <linearGradient id="paint3_linear_201_1095" x1="702.25" y1="530.531" x2="685.952" y2="552.526" gradientUnits="userSpaceOnUse">
    <stop stop-color="#E250E5"/>
    <stop offset="1" stop-color="#4B50E6"/>
    </linearGradient>
    <linearGradient id="paint4_linear_201_1095" x1="1068.5" y1="229" x2="1035.87" y2="273" gradientUnits="userSpaceOnUse">
    <stop stop-color="#E250E5"/>
    <stop offset="1" stop-color="#4B50E6"/>
    </linearGradient>
    <linearGradient id="paint5_linear_201_1095" x1="1591" y1="592" x2="1567.29" y2="623.992" gradientUnits="userSpaceOnUse">
    <stop stop-color="#E250E5"/>
    <stop offset="1" stop-color="#4B50E6"/>
    </linearGradient>
    <linearGradient id="paint6_linear_201_1095" x1="1209" y1="215.809" x2="1197.15" y2="231.805" gradientUnits="userSpaceOnUse">
    <stop stop-color="#E250E5"/>
    <stop offset="1" stop-color="#4B50E6"/>
    </linearGradient>
    </defs>
</svg>


<div class="flex gap-x-[90px] relative top-[-450px] mb-[-380px]">
      <div class="w-[180px] flex flex-col gap-y-[20px] items-center">
        <button class="w-[50px] h-[50px] bg-blue-500 rounded-lg flex justify-center items-center">
            <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.9227 8.01782H23.104C23.5988 8.01782 24 8.39807 24 8.86713V11.8195C23.9942 12.2862 23.5964 12.6633 23.104 12.6688H19.0187C17.8257 12.684 16.7826 11.9098 16.512 10.8084C16.3765 10.1247 16.5667 9.41917 17.0317 8.88093C17.4966 8.34269 18.1888 8.02676 18.9227 8.01782ZM19.1039 11.1219H19.4986C20.0052 11.1219 20.4159 10.7326 20.4159 10.2524C20.4159 9.77217 20.0052 9.38287 19.4986 9.38287H19.1039C18.8616 9.38017 18.6282 9.46952 18.4559 9.63098C18.2835 9.79245 18.1866 10.0126 18.1866 10.2423C18.1865 10.7242 18.5956 11.1164 19.1039 11.1219Z" fill="#F9F9FA" fill-opacity="0.4"/>
                <path d="M18.9227 6.27877H24V6.27877C24 2.31536 21.5573 0 17.4187 0H6.58133C2.44267 0 0 2.31536 0 6.22821V14.7718C0 18.6846 2.44267 21 6.58133 21H17.4187C21.5573 21 24 18.6846 24 14.7718V14.4078H18.9227C16.5662 14.4078 14.656 12.5971 14.656 10.3635C14.656 8.1299 16.5662 6.31921 18.9227 6.31921V6.27877Z" fill="white"/>
                <path d="M12.4587 6.27884H5.6854C5.17705 6.27331 4.76803 5.8811 4.76807 5.39921C4.77391 4.92294 5.18291 4.53976 5.6854 4.53979H12.4587C12.9654 4.53979 13.3761 4.92909 13.3761 5.40932C13.3761 5.88955 12.9654 6.27884 12.4587 6.27884Z" fill="#948BFB"/>
            </svg>
        </button>
        <span class="text-white text-[18px] font-bold">Set Up Your Wallet</span>
        <p class="w-[230px] text-[10px] text-center mt-[-10px] text-white">
        Once you’ve set up your wallet of choice, connect it to OpenSeaby clicking the NFT Marketplacein the top right corner.
        </p>
      </div>

      <div class="w-[190px] flex flex-col gap-y-[20px] items-center">
        <button class="w-[50px] h-[50px] bg-blue-500 rounded-lg flex justify-center items-center">
            <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.9227 8.01782H23.104C23.5988 8.01782 24 8.39807 24 8.86713V11.8195C23.9942 12.2862 23.5964 12.6633 23.104 12.6688H19.0187C17.8257 12.684 16.7826 11.9098 16.512 10.8084C16.3765 10.1247 16.5667 9.41917 17.0317 8.88093C17.4966 8.34269 18.1888 8.02676 18.9227 8.01782ZM19.1039 11.1219H19.4986C20.0052 11.1219 20.4159 10.7326 20.4159 10.2524C20.4159 9.77217 20.0052 9.38287 19.4986 9.38287H19.1039C18.8616 9.38017 18.6282 9.46952 18.4559 9.63098C18.2835 9.79245 18.1866 10.0126 18.1866 10.2423C18.1865 10.7242 18.5956 11.1164 19.1039 11.1219Z" fill="#F9F9FA" fill-opacity="0.4"/>
                <path d="M18.9227 6.27877H24V6.27877C24 2.31536 21.5573 0 17.4187 0H6.58133C2.44267 0 0 2.31536 0 6.22821V14.7718C0 18.6846 2.44267 21 6.58133 21H17.4187C21.5573 21 24 18.6846 24 14.7718V14.4078H18.9227C16.5662 14.4078 14.656 12.5971 14.656 10.3635C14.656 8.1299 16.5662 6.31921 18.9227 6.31921V6.27877Z" fill="white"/>
                <path d="M12.4587 6.27884H5.6854C5.17705 6.27331 4.76803 5.8811 4.76807 5.39921C4.77391 4.92294 5.18291 4.53976 5.6854 4.53979H12.4587C12.9654 4.53979 13.3761 4.92909 13.3761 5.40932C13.3761 5.88955 12.9654 6.27884 12.4587 6.27884Z" fill="#948BFB"/>
            </svg>
        </button>
        <span class="text-white text-[18px] font-bold">Create Your Collection</span>
        <p class="w-[230px] text-[10px] text-center mt-[-10px] text-white">
            Click Create and set up your collection. Add social links, a description, profile & banner images, and set a secondary sales fee.
        </p>
      </div>

      <div class="w-[180px] flex flex-col gap-y-[20px] items-center">
        <button class="w-[50px] h-[50px] bg-blue-500 rounded-lg flex justify-center items-center">
            <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.9227 8.01782H23.104C23.5988 8.01782 24 8.39807 24 8.86713V11.8195C23.9942 12.2862 23.5964 12.6633 23.104 12.6688H19.0187C17.8257 12.684 16.7826 11.9098 16.512 10.8084C16.3765 10.1247 16.5667 9.41917 17.0317 8.88093C17.4966 8.34269 18.1888 8.02676 18.9227 8.01782ZM19.1039 11.1219H19.4986C20.0052 11.1219 20.4159 10.7326 20.4159 10.2524C20.4159 9.77217 20.0052 9.38287 19.4986 9.38287H19.1039C18.8616 9.38017 18.6282 9.46952 18.4559 9.63098C18.2835 9.79245 18.1866 10.0126 18.1866 10.2423C18.1865 10.7242 18.5956 11.1164 19.1039 11.1219Z" fill="#F9F9FA" fill-opacity="0.4"/>
                <path d="M18.9227 6.27877H24V6.27877C24 2.31536 21.5573 0 17.4187 0H6.58133C2.44267 0 0 2.31536 0 6.22821V14.7718C0 18.6846 2.44267 21 6.58133 21H17.4187C21.5573 21 24 18.6846 24 14.7718V14.4078H18.9227C16.5662 14.4078 14.656 12.5971 14.656 10.3635C14.656 8.1299 16.5662 6.31921 18.9227 6.31921V6.27877Z" fill="white"/>
                <path d="M12.4587 6.27884H5.6854C5.17705 6.27331 4.76803 5.8811 4.76807 5.39921C4.77391 4.92294 5.18291 4.53976 5.6854 4.53979H12.4587C12.9654 4.53979 13.3761 4.92909 13.3761 5.40932C13.3761 5.88955 12.9654 6.27884 12.4587 6.27884Z" fill="#948BFB"/>
            </svg>
        </button>
        <span class="text-white text-[18px] font-bold">Add Your NFTs</span>
        <p class="w-[230px] text-[10px] text-center mt-[-10px] text-white">
            Upload your work (image, video, audio, or 3D art), add a title and description, and customize your NFTs with properties, stats
        </p>
      </div>

      <div class="w-[180px] flex flex-col gap-y-[20px] items-center">
        <button class="w-[50px] h-[50px] bg-blue-500 rounded-lg flex justify-center items-center">
            <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.9227 8.01782H23.104C23.5988 8.01782 24 8.39807 24 8.86713V11.8195C23.9942 12.2862 23.5964 12.6633 23.104 12.6688H19.0187C17.8257 12.684 16.7826 11.9098 16.512 10.8084C16.3765 10.1247 16.5667 9.41917 17.0317 8.88093C17.4966 8.34269 18.1888 8.02676 18.9227 8.01782ZM19.1039 11.1219H19.4986C20.0052 11.1219 20.4159 10.7326 20.4159 10.2524C20.4159 9.77217 20.0052 9.38287 19.4986 9.38287H19.1039C18.8616 9.38017 18.6282 9.46952 18.4559 9.63098C18.2835 9.79245 18.1866 10.0126 18.1866 10.2423C18.1865 10.7242 18.5956 11.1164 19.1039 11.1219Z" fill="#F9F9FA" fill-opacity="0.4"/>
                <path d="M18.9227 6.27877H24V6.27877C24 2.31536 21.5573 0 17.4187 0H6.58133C2.44267 0 0 2.31536 0 6.22821V14.7718C0 18.6846 2.44267 21 6.58133 21H17.4187C21.5573 21 24 18.6846 24 14.7718V14.4078H18.9227C16.5662 14.4078 14.656 12.5971 14.656 10.3635C14.656 8.1299 16.5662 6.31921 18.9227 6.31921V6.27877Z" fill="white"/>
                <path d="M12.4587 6.27884H5.6854C5.17705 6.27331 4.76803 5.8811 4.76807 5.39921C4.77391 4.92294 5.18291 4.53976 5.6854 4.53979H12.4587C12.9654 4.53979 13.3761 4.92909 13.3761 5.40932C13.3761 5.88955 12.9654 6.27884 12.4587 6.27884Z" fill="#948BFB"/>
            </svg>
        </button>
        <span class="text-white text-[18px] font-bold">List Them For Sale</span>
        <p class="w-[230px] text-[10px] text-center mt-[-10px] text-white">
            Choose between auctions, fixed-price listings, and declining-price listings. You choose how you want to sell your NFTs!
        </p>
      </div>
    </div>

    <div class="w-screen flex flex-col gap-y-[20px] overflow-x-hidden py-[50px] bg-black">
      <span class="text-white text-[25px] relative left-[150px] font-bold">New Post</span>
      
      
      <x-MyComponents.carrousell/>
    </div>

    <div class="w-screen flex flex-col gap-y-[20px] items-center py-[50px] bg-gray-950">
        <div class="w-[900px] flex flex-col gap-y-[20px]">
            <span class="text-white text-[25px]">Top Sellers</span>
            <div class="w-[950px] flex gap-x-[40px] gap-y-[30px] flex-wrap overflow-hidden">
           

            @php

                $sales = DB::table('sales')
                     -> skip(0) -> take(10) -> get(); 
            @endphp

            @foreach($sales as $sale)
                @php    
                $item_id = $sale -> item_id;    

                $author_id = DB::table('items')->select('author_id')
                ->where('id', '=', $item_id)
                ->get()[0]->author_id;  
                
                
                $author_name = DB::table('authors')->select('name')
                ->where('id', '=', $author_id)
                ->get()[0]->name;  

               
                
                @endphp

                <x-MyComponents.picture-info authorPicture="https://images.pexels.com/photos/1468379/pexels-photo-1468379.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" size="50px">
                  <span class="text-gray-500 text-[12px]">Creator</span>
                  <span class="font-bold text-[12px]">{{$author_name}}</span>
                </x-MyComponents.picture-info>

            @endforeach  

            </div>
        </div>
        <div class="mt-[50px]">
          <span class="text-white text-[25px]">Todays Picks</span>
          <x-MyComponents.cardsdivdisplay/>
        </div>
       
    </div>

  <x-MyComponents.footer/>
</x-MyComponents.maintemplate>





