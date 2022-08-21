  <!-- LOADER SCRIPT BELOW -->
  <!-- LOADER SCRIPT BELOW -->
  <!-- LOADER SCRIPT BELOW -->
  <style>
    .loader {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: row;
      height: 100%;
      width: 100%;
      background: #000;
      position: fixed;
      z-index: 22;
      pointer-events: none;
      transition: all 0.75s ease-in-out;

    }

    .loaded .loader {
      opacity: 0;
      z-index: -1;
    }
  </style>

<style>
    .load {
      display: inline-flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      height: 100vh;
      width: 100vw;
      background: #000;
      position: fixed;
      z-index: 22;
      pointer-events: none;
      transition: all 0.75s ease-in-out;

    }

    .splash-logo {
      z-index: 56;
    }

    .spinners {
      display: inline-flex;
      background-color: #010101;
      animation: loading 0.5s ease-in 4s forwards;
      z-index: 55;
      margin-top: 32px;
     

    }


    @keyframes square {
      0% {
        transform: scale(1);
      }

      50% {
        transform: scale(1.25);
        
      }

      60% {
        transform: scale(1);
      }
    }



.spinners .square1, .spinners .square1, .spinners .square3 { 
        width: 30px;
      height: 30px;
      margin-right: 15px;
      border: 2px solid white;
      border-radius: 100px;
      background-color:transparent!important;
    }

    .square1 {
      animation: square 1s ease-in 0s infinite;      
    }

    .square2 {
      animation: square 1s ease-in 0.2s infinite;
      
    }

    .square3 {
      animation: square 1s ease-in 0.4s infinite;
    }


    .scroll {
      overflow: hidden;
    }
  </style>

  <!-- <div class="loader">
    <div class="spinner">
        <div class="spinner-1"></div>
        <div class="spinner-2"></div>
        <div class="spinner-3"></div>
    </div>
</div> -->



  <div class="loader">
    <div class="load">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="auto" height="150" viewBox="0 0 792.058 857.338">
            <defs>
              <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
                <stop offset="0" stop-color="#9f6cff"/>
                <stop offset="0.65" stop-color="#ff0aaa"/>
                <stop offset="1" stop-color="#ff6ccc"/>
              </linearGradient>
            </defs>
            <path id="Flames_Logo_Shape_2022_2" data-name="Flames Logo (Shape) 2022 2" d="M887.055,700.773v2.567c-4.723,1.424-15,19.3-18.41,23.963-14.664,20.1-32.958,37.371-47.523,57.34l-25.259,24.819c-17.974,16.369-34.994,35.22-55.231,49.209-22.916,15.841-46.887,30.079-71.5,44.5l-22.692,9.414A548.856,548.856,0,0,1,569.8,938.262c-20.449,5.158-42.412,6.695-63.793,10.273l-20.978.428c-39.707,6.178-86.158-.254-116.026-12.41l-22.263-6.418c-87.178-35.151-146.007-98.549-193.949-173.3-11.95-18.635-24.386-39.886-33.823-60.764q-5.78-15.4-11.56-30.809c-3.456-7.365-12.151-23.124-12.416-31.666,10.015.079,16.993,5.988,24.4,8.986,12.617,5.1,24.712,10.849,37.251,15.405,3.826,1.391,19.8,7.681,22.263,4.7q.429-13.691.856-27.386c5.607-28.479,6.7-58.672,15.841-84.294,8.053-22.583,13.584-48.176,23.976-69.749,8.281-17.185,15.393-35.288,23.548-53.061,17.8-38.787,41.693-77.987,64.221-112.967l3.854.855c1.649,8.054,6.845,15.567,10.273,22.251,13.428,26.169,23.149,52.093,39.389,74.885,9.232,12.955,14.078,29.733,25.689,40.227l1.285-.428c13.042-20.85,28.158-41.787,41.53-62.9l11.987-23.535c23-37.5,42.636-81.216,59.94-123.665,10.817-26.538,20.437-54.635,29.113-81.73,7.15-22.328,9.687-44.7,17.126-67.182l3.425.428c4.1,9.265,11.506,16.1,16.269,24.391,7.828,13.626,16.356,26.377,23.976,39.368,27.088,46.179,51,94.272,76.209,142.493,5.85,11.189,9.313,22.977,14.128,34.658,11.955,29.025,26.134,60.66,36.386,91.572,10.287,31,13.97,64.47,24.832,95.424,9.762-1.886,18.546-11.334,26.114-16.261,21.332-13.884,41.612-28.05,62.08-42.791,5.962-4.293,26.37-24.517,32.967-23.534q-.214,6.845-.428,13.692-.215,12.623-.428,25.25c-1.585,8.39-2.959,22.561-4.709,30.809-2.393,11.272-.6,19.386-3,30.381-5.645,25.84-8.746,53.107-15.841,78.307-9.156,32.52-22.754,64.592-34.251,94.139l1.285,1.712c5.975.06,8.545-1.72,12.845-2.567,14.593-2.88,28.3-2.264,42.385-6.419C869.541,702.767,878.046,700.7,887.055,700.773ZM584.361,450.019l-18.833,11.554-38.965,29.1c-30.988,24.121-57.412,53.458-83.487,82.586-10.232,11.431-21.757,22.53-30.826,35.089l-26.542,35.516-9.419,14.122c-3.96,3.108-17.177,4.865-25.259,3-21.846-5.051-47.562-25.788-60.368-40.652-4.437-5.148-14.338-20.415-20.55-22.25-6.178,16.432-10.945,34.231-15.841,53.06q-.427,7.7-.856,15.405c-3.587,22.369.337,48.7,5.137,66.753,18.581,69.872,59.279,110.45,113.029,145.06,28.338,18.248,63.728,33.794,109.6,33.8l21.41-.428c86.858-18.689,141.213-70.8,184.1-133.507a337.4,337.4,0,0,0,41.53-83.87q2.354-13.265,4.7-26.53c1.573-7.149,3.588-19.626,2.569-27.386l-3.425-.428c-6.255,10.362-20.112,16.5-29.114,24.386C685.8,679.443,664.1,695.022,638.3,700.768c-10.481,2.335-25.892,4.842-35.963-.427-13.66-7.148-17.761-21.738-21.409-38.94-3.963-18.721-3-40.363-3-62.474,0-33.852-.546-66.72,4.7-96.279,2.5-14.054,1.21-27.766,3.426-40.651.586-3.406,1.3-9.851-.856-11.553Z" transform="translate(-94.997 -94.008)" fill-rule="evenodd" fill="url(#linear-gradient)"/>
          </svg>
      <div class="spinners">
        <div class="square1"></div>
        <div class="square2"></div>
        <div class="square3"></div>
      </div>
    </div>
  </div>


  <script>
    // For Live Projects
    window.addEventListener('load', function () {
      document.querySelector('body').classList.add("loaded")
    });
  </script>
  <!-- LOADER SCRIPT ABOVE -->
  <!-- LOADER SCRIPT BELOW -->
  <!-- LOADER SCRIPT BELOW -->



  