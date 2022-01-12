<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Muli:wght@200&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
   <style type="text/css">



   	html{
   		scroll-behavior: smooth;
   	}

   	.row{
   		margin-left: 0!important;
   		margin-right: 0!important;
   	}
	*{
		margin: 0; padding: 0; box-sizing: border-box; font-family: 'Muli', sans-serif;

	}

	.nav_style{
		background-color: #a29bfe!important;
	}
	.nav_style a{color: white;}


	/*..............................................  main header......................................................    */

	.main_header{
		height: 450px;
		width: 100%;
	}

	.rightside h1{
		font-size: 3rem;
	}

	.corona_root img{
          animation: gocorona 3s linear infinite;
	}

	@keyframes gocorona {
		0%{ transform: rotate(0); }
		100%{ transform: rotate(360deg); }
	}


	.leftside img { animation: heartbeat 5s linear infinite; }

	@keyframes heartbeat
	{
      0%
      {
      	transform: scale( .75);
      }
      20%
      {
      	transform: scale( 1);
      }
      40%
      {
      	transform: scale( .75);
      }
      60%
      {
      	transform: scale( 1);
      }
      80%
      {
      	transform: scale( .75);
      }
      100%
      {
      	transform: scale( 1);
      }
	}
	/**********************corona update **************************/

	.corona_update{
		margin: 0 0 30px 0;
	}
	.corona_update h3{
		color: #ff7675;
	}
	.corona_update h1{
		font-size: 2rem; text-align: center;
	}

}


/*/////////////// about section //////////////////////*/

   .sub-section{
   	background-color: #fbfafd;
   }

   /*///////////////////// footer //////////////////*/

   .footer_style{
   	background-color: #a29bfe!important;
   }

   .footer_style p{
   	margin-bottom: 0%!important;
   }
   /*********** top scroll *************************/
   #myBtn{
   	display: none;
   	position: fixed;
   	bottom: 30px;
   	right: 40px;
   	z-index: 99;
   	border: none;
   	outline: none;
   	background-color: #00A8FF;
   	color: white;
   	cursor: pointer;
   	padding: 10px;
   	border-radius: 10px;

   }
   #myBtn:hover{
   	background: #606060;
   }


   /*  /////////////////// responsive css ///////////////////////////  */
   @media(max-width: 768px)
   {
   	.main_header { height: 700px; text-align: center; }
   	.main_header h1{
   		text-align: center;
   		padding: 0;
   		width: 100%;
   		font-size: 30px;
   	}
}
   	.count_style{
   		display: inline!important;
   	}
   	.count_style p{
     text-align: center;
   	}
   	.about_res{
   		margin-left: 0!important;
   	}
   
</style>

	</head>
<body onload="fetch()">

<nav class="navbar navbar-expand-lg nav_style p-3">
   <span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="64" height="64"
viewBox="0 0 172 172"
style=" fill:#000000;"><defs><linearGradient x1="86" y1="18.8125" x2="86" y2="151.24444" gradientUnits="userSpaceOnUse" id="color-1_CGf5JvobsqEu_gr1"><stop offset="0" stop-color="#ff5300"></stop><stop offset="1" stop-color="#45145a"></stop></linearGradient><linearGradient x1="75.25" y1="18.8125" x2="75.25" y2="151.24444" gradientUnits="userSpaceOnUse" id="color-2_CGf5JvobsqEu_gr2"><stop offset="0" stop-color="#ff5300"></stop><stop offset="1" stop-color="#45145a"></stop></linearGradient><linearGradient x1="107.5" y1="18.8125" x2="107.5" y2="151.24444" gradientUnits="userSpaceOnUse" id="color-3_CGf5JvobsqEu_gr3"><stop offset="0" stop-color="#ff5300"></stop><stop offset="1" stop-color="#45145a"></stop></linearGradient><linearGradient x1="75.25" y1="18.8125" x2="75.25" y2="151.24444" gradientUnits="userSpaceOnUse" id="color-4_CGf5JvobsqEu_gr4"><stop offset="0" stop-color="#ff5300"></stop><stop offset="1" stop-color="#45145a"></stop></linearGradient><linearGradient x1="75.25" y1="99.4375" x2="75.25" y2="109.96444" gradientUnits="userSpaceOnUse" id="color-5_CGf5JvobsqEu_gr5"><stop offset="0" stop-color="#ff9f70"></stop><stop offset="1" stop-color="#8b28b6"></stop></linearGradient><linearGradient x1="107.5" y1="81.141" x2="107.5" y2="90.21938" gradientUnits="userSpaceOnUse" id="color-6_CGf5JvobsqEu_gr6"><stop offset="0" stop-color="#ff9f70"></stop><stop offset="1" stop-color="#8b28b6"></stop></linearGradient><linearGradient x1="75.25" y1="58.84012" x2="75.25" y2="70.50119" gradientUnits="userSpaceOnUse" id="color-7_CGf5JvobsqEu_gr7"><stop offset="0" stop-color="#ff9f70"></stop><stop offset="1" stop-color="#8b28b6"></stop></linearGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M149.14819,72.67c-2.35694,-0.37894 -4.7515,0.27412 -6.55481,1.81137c-1.09919,0.93525 -1.9135,2.1285 -2.38113,3.45613h-1.57756c-1.28194,0 -2.35694,-0.89494 -2.62031,-2.17956c-1.07769,-5.289 -2.97506,-10.25819 -5.5255,-14.79737c-1.3545,-2.42681 -1.37331,-5.21375 -0.15856,-7.45781c1.19056,0.51062 2.49938,0.73638 3.82969,0.6235c2.36231,-0.19081 4.52038,-1.41362 5.91787,-3.35669c2.27094,-3.15244 1.80869,-7.70238 -1.06963,-10.58338l-7.19175,-7.19444c-2.881,-2.881 -7.43362,-3.34056 -10.58606,-1.07231c-1.94306,1.40019 -3.16587,3.55556 -3.35669,5.91787c-0.1075,1.32494 0.11288,2.63644 0.62619,3.82969c-2.24675,1.21475 -5.031,1.19325 -7.45781,-0.15856c-4.54187,-2.54775 -9.50837,-4.44513 -14.79738,-5.52281c-1.28731,-0.26069 -2.18225,-1.33569 -2.18225,-2.61763v-1.57756c1.32762,-0.47031 2.52088,-1.28463 3.45613,-2.38381c1.53456,-1.806 2.193,-4.19519 1.80869,-6.55481c-0.6235,-3.83506 -4.16563,-6.72681 -8.23987,-6.72681h-10.17488c-4.07425,0 -7.61637,2.89175 -8.23987,6.72681c-0.38431,2.36231 0.27413,4.7515 1.80869,6.55481c0.93525,1.09919 2.1285,1.9135 3.45613,2.38381v1.57756c0,1.28194 -0.89494,2.35694 -2.17956,2.62031c-5.289,1.07769 -10.2555,2.97506 -14.79737,5.52281c-2.42681,1.35181 -5.21375,1.37331 -7.45781,0.15856c0.51062,-1.19056 0.731,-2.50475 0.62619,-3.82969c-0.19081,-2.36231 -1.41363,-4.52038 -3.35669,-5.91788c-3.14975,-2.27094 -7.70237,-1.81137 -10.58338,1.07231l-7.19444,7.19444c-2.881,2.87831 -3.34056,7.43094 -1.06963,10.58337c1.3975,1.94306 3.55556,3.16588 5.91788,3.35669c1.32494,0.11556 2.63644,-0.11556 3.82969,-0.6235c1.21475,2.24406 1.19325,5.031 -0.15856,7.45781c-2.54775,4.54188 -4.44513,9.50838 -5.5255,14.79738c-0.26338,1.28194 -1.34106,2.17688 -2.62031,2.17688h-1.57756c-0.46762,-1.32762 -1.28194,-2.52088 -2.38113,-3.45612c-1.80331,-1.53456 -4.19519,-2.19031 -6.55481,-1.81137c-3.83775,0.6235 -6.7295,4.171 -6.7295,8.24256v10.17219c0,4.07425 2.89175,7.61906 6.72681,8.24256c2.35425,0.38162 4.74881,-0.27681 6.55481,-1.81137c1.09919,-0.93525 1.9135,-2.1285 2.38112,-3.45612h1.57756c1.28194,0 2.35694,0.89494 2.62031,2.17956c1.07769,5.29169 2.97775,10.26356 5.52819,14.80544c1.34913,2.42413 1.36794,5.20569 0.15319,7.44975c-1.19056,-0.51062 -2.50475,-0.73638 -3.827,-0.6235c-2.36231,0.19081 -4.52038,1.41363 -5.91788,3.35669c-2.26825,3.15244 -1.80869,7.69969 1.06962,10.58338l7.19175,7.19175c1.6555,1.6555 3.85925,2.51281 6.03344,2.51281c1.61519,0 3.21156,-0.473 4.55262,-1.4405c1.94306,-1.3975 3.16588,-3.55019 3.35669,-5.9125c0.1075,-1.32763 -0.11288,-2.63913 -0.62619,-3.83238c2.24406,-1.21744 5.02831,-1.19594 7.4605,0.15856c4.54188,2.54775 9.50838,4.44513 14.79738,5.52281c1.28463,0.26337 2.17956,1.33838 2.17956,2.62031v1.57756c-1.32762,0.47031 -2.52088,1.28463 -3.45612,2.38381c-1.53456,1.806 -2.193,4.19519 -1.80869,6.55481c0.6235,3.83506 4.16563,6.72681 8.23987,6.72681h10.17488c4.07425,0 7.61638,-2.89175 8.23987,-6.72681c0.38431,-2.36231 -0.27412,-4.7515 -1.80869,-6.55481c-0.93525,-1.09919 -2.1285,-1.9135 -3.45612,-2.38381v-1.57756c0,-1.28194 0.89494,-2.35694 2.17956,-2.62031c5.289,-1.07769 10.2555,-2.97506 14.79738,-5.52281c2.4295,-1.3545 5.21375,-1.37331 7.4605,-0.15856c-0.51063,1.19056 -0.73369,2.50475 -0.62619,3.83238c0.19081,2.36231 1.41363,4.51769 3.354,5.9125c1.34375,0.9675 2.94281,1.4405 4.558,1.4405c2.17419,0 4.37525,-0.85462 6.03075,-2.51281l7.19444,-7.19175c2.87831,-2.88369 3.33787,-7.43363 1.06963,-10.58338c-1.3975,-1.94306 -3.55556,-3.16587 -5.91788,-3.35669c-1.32762,-0.11019 -2.63644,0.11556 -3.82969,0.6235c-1.21475,-2.24138 -1.19325,-5.02562 0.15588,-7.44975c2.55044,-4.54188 4.4505,-9.51106 5.52819,-14.80544c0.258,-1.28194 1.33569,-2.17687 2.61494,-2.17687h1.57756c0.46762,1.32762 1.28194,2.52088 2.38113,3.45613c1.80331,1.53456 4.18713,2.19031 6.55481,1.81137c3.83775,-0.6235 6.7295,-4.171 6.7295,-8.24256v-10.17219c0,-4.07425 -2.89175,-7.62175 -6.72681,-8.24525zM124.00394,44.19594c0.09137,-0.08869 0.17738,-0.19081 0.25263,-0.29294c0.80356,-1.06694 0.69606,-2.56656 -0.24994,-3.51256c-0.559,-0.559 -0.84119,-1.33031 -0.77937,-2.11775c0.0645,-0.80088 0.46762,-1.50769 1.13681,-1.98875c1.02125,-0.73638 2.62569,-0.50794 3.64425,0.51062l7.19444,7.19444c1.02125,1.02125 1.24431,2.623 0.50794,3.64156c-0.48375,0.66919 -1.18788,1.07231 -1.98606,1.1395c-0.7955,0.05912 -1.56144,-0.22038 -2.11775,-0.77937c-0.55362,-0.55094 -1.32762,-0.84119 -2.09356,-0.77669c-0.65575,0.04569 -1.2685,0.33056 -1.72538,0.7955c-1.376,1.37869 -2.365,3.0315 -2.967,4.81062c-1.73613,-2.03175 -3.62812,-3.92375 -5.66256,-5.65719c1.79256,-0.61006 3.45881,-1.58294 4.84556,-2.967zM44.247,48.04713c-0.45956,-0.48644 -1.08844,-0.78744 -1.76569,-0.83581c-0.77669,-0.05644 -1.53994,0.22844 -2.09087,0.77938c-0.559,0.559 -1.32225,0.84387 -2.11775,0.77937c-0.79819,-0.0645 -1.505,-0.47031 -1.98606,-1.1395c-0.73369,-1.02125 -0.51062,-2.623 0.50794,-3.64156l7.19444,-7.19444c1.02125,-1.01856 2.62569,-1.247 3.64156,-0.51062c0.67188,0.48375 1.075,1.18787 1.1395,1.98875c0.0645,0.78744 -0.22038,1.55875 -0.77937,2.11775c-0.946,0.946 -1.04813,2.44831 -0.24456,3.51794c0.07525,0.10213 0.15856,0.19888 0.24994,0.28756c1.38406,1.38137 3.03956,2.37575 4.82675,2.97775c-2.02906,1.73344 -3.91837,3.62275 -5.65181,5.65181c-0.602,-1.763 -1.56681,-3.40775 -2.924,-4.77838zM47.99606,127.80406c-0.09137,0.08869 -0.17737,0.19081 -0.25263,0.29294c-0.80356,1.06694 -0.69606,2.56656 0.24994,3.51256c0.559,0.559 0.84119,1.33031 0.77938,2.12044c-0.0645,0.79819 -0.46762,1.50231 -1.1395,1.98337c-1.02125,0.73638 -2.623,0.51063 -3.64156,-0.50794l-7.19175,-7.19175c-1.02125,-1.02125 -1.24431,-2.62569 -0.51062,-3.64425c0.48375,-0.66919 1.18787,-1.07231 1.98606,-1.1395c0.79281,-0.05644 1.56144,0.22038 2.11775,0.77938c0.50525,0.50525 1.19056,0.78475 1.90275,0.78475c0.71219,0 1.40019,-0.28488 1.90275,-0.79012c1.39213,-1.38944 2.33812,-3.0745 2.94013,-4.87244c1.74956,2.05325 3.65769,3.96406 5.71094,5.71362c-1.79525,0.61006 -3.46688,1.57219 -4.85363,2.95894zM127.80944,124.00931c1.00781,1.0105 2.795,1.0105 3.80281,0c0.559,-0.55631 1.32494,-0.83313 2.11775,-0.77938c0.79819,0.0645 1.505,0.47031 1.98606,1.1395c0.73369,1.02125 0.51062,2.62569 -0.50794,3.64425l-7.19444,7.19175c-1.01856,1.02394 -2.61762,1.247 -3.64425,0.50794c-0.66919,-0.48375 -1.07231,-1.18519 -1.13681,-1.98337c-0.0645,-0.79012 0.22037,-1.56144 0.77937,-2.12044c0.946,-0.946 1.04812,-2.44831 0.24456,-3.51794c-0.07525,-0.10213 -0.15856,-0.19888 -0.24994,-0.28756c-1.38944,-1.38944 -3.07181,-2.34081 -4.86706,-2.94281c2.05325,-1.74956 3.96137,-3.65769 5.71094,-5.70825c0.60469,1.78987 1.5695,3.46687 2.95894,4.85631zM150.5,91.08744c0,1.44587 -0.97288,2.73587 -2.21719,2.93744c-0.81431,0.13437 -1.59906,-0.08062 -2.20913,-0.59931c-0.60469,-0.51331 -0.94869,-1.26044 -0.94869,-2.05056c0,-1.48619 -1.204,-2.6875 -2.6875,-2.6875h-3.8055c-3.8055,0 -7.12187,2.72781 -7.88781,6.48225c-3.65769,17.95519 -17.62463,31.91944 -35.57981,35.57712c-3.75175,0.76594 -6.47687,4.08231 -6.47687,7.88513v3.8055c0,1.48619 1.204,2.6875 2.6875,2.6875c0.79012,0 1.53725,0.34669 2.05056,0.94869c0.51869,0.61275 0.731,1.3975 0.59931,2.20913c-0.20425,1.24431 -1.49425,2.21719 -2.93744,2.21719h-10.17488c-1.44319,0 -2.73319,-0.97288 -2.93744,-2.21719c-0.13169,-0.81431 0.08063,-1.59906 0.59931,-2.20913c0.51331,-0.602 1.26044,-0.94869 2.05056,-0.94869c1.4835,0 2.6875,-1.20131 2.6875,-2.6875v-3.8055c0,-3.80281 -2.72512,-7.11919 -6.47956,-7.88512c-17.95519,-3.65769 -31.92212,-17.62462 -35.57981,-35.57712c-0.76594,-3.75444 -4.08231,-6.48225 -7.88512,-6.48225h-3.8055c-1.4835,0 -2.6875,1.20131 -2.6875,2.6875c0,0.79012 -0.344,1.53725 -0.94869,2.05056c-0.61275,0.516 -1.40019,0.72831 -2.20913,0.59931c-1.24431,-0.20425 -2.21719,-1.49156 -2.21719,-2.93744v-10.17219c0,-1.44588 0.97288,-2.73588 2.21719,-2.93744c0.817,-0.13438 1.59906,0.08063 2.20912,0.59931c0.60469,0.51063 0.94869,1.25775 0.94869,2.04788c0,1.48619 1.204,2.6875 2.6875,2.6875h3.8055c3.8055,0 7.12188,-2.72781 7.88781,-6.48225c3.65769,-17.95519 17.62462,-31.91944 35.57981,-35.57713c3.75175,-0.76594 6.47687,-4.08231 6.47687,-7.88513v-3.8055c0,-1.48619 -1.204,-2.6875 -2.6875,-2.6875c-0.79013,0 -1.53725,-0.34669 -2.05056,-0.94869c-0.51869,-0.61275 -0.731,-1.3975 -0.59931,-2.20913c0.20425,-1.24431 1.49425,-2.21719 2.93744,-2.21719h10.17488c1.44319,0 2.73319,0.97288 2.93744,2.21719c0.13169,0.81431 -0.08062,1.59906 -0.59931,2.20912c-0.51331,0.602 -1.26044,0.94869 -2.05056,0.94869c-1.4835,0 -2.6875,1.20131 -2.6875,2.6875v3.8055c0,3.80281 2.72513,7.11919 6.47956,7.88513c17.95519,3.65769 31.92213,17.62463 35.57981,35.57713c0.76594,3.75444 4.08231,6.48225 7.88512,6.48225h3.8055c1.4835,0 2.6875,-1.20131 2.6875,-2.6875c0,-0.79013 0.344,-1.53725 0.94869,-2.05056c0.61006,-0.51869 1.39212,-0.73638 2.20913,-0.59931c1.24431,0.20425 2.21719,1.49156 2.21719,2.93744z" fill="url(#color-1_CGf5JvobsqEu_gr1)"></path><path d="M75.25,50.41213c-7.76956,0 -14.09056,6.321 -14.09056,14.08788c0,7.76687 6.321,14.08787 14.09056,14.08787c7.76956,0 14.09056,-6.321 14.09056,-14.08787c0,-7.76687 -6.321,-14.08788 -14.09056,-14.08788zM75.25,73.21288c-4.80525,0 -8.71556,-3.90762 -8.71556,-8.71287c0,-4.80525 3.91031,-8.71288 8.71556,-8.71288c4.80525,0 8.71556,3.90763 8.71556,8.71288c0,4.80525 -3.91031,8.71287 -8.71556,8.71287z" fill="url(#color-2_CGf5JvobsqEu_gr2)"></path><path d="M107.5,71.91213c-7.76956,0 -14.09056,6.321 -14.09056,14.08787c0,7.76687 6.321,14.08787 14.09056,14.08787c7.76956,0 14.09056,-6.321 14.09056,-14.08788c0,-7.76688 -6.321,-14.08787 -14.09056,-14.08787zM107.5,94.71288c-4.80525,0 -8.71556,-3.90763 -8.71556,-8.71288c0,-4.80525 3.91031,-8.71287 8.71556,-8.71287c4.80525,0 8.71556,3.90762 8.71556,8.71287c0,4.80525 -3.91031,8.71288 -8.71556,8.71288z" fill="url(#color-3_CGf5JvobsqEu_gr3)"></path><path d="M75.25,90.72463c-7.76956,0 -14.09056,6.321 -14.09056,14.08787c0,7.76687 6.321,14.08787 14.09056,14.08787c7.76956,0 14.09056,-6.321 14.09056,-14.08787c0,-7.76687 -6.321,-14.08787 -14.09056,-14.08787zM75.25,113.52538c-4.80525,0 -8.71556,-3.90763 -8.71556,-8.71287c0,-4.80525 3.91031,-8.71287 8.71556,-8.71287c4.80525,0 8.71556,3.90763 8.71556,8.71287c0,4.80525 -3.91031,8.71287 -8.71556,8.71287z" fill="url(#color-4_CGf5JvobsqEu_gr4)"></path><g fill="url(#color-5_CGf5JvobsqEu_gr5)"><circle cx="28" cy="39" transform="scale(2.6875,2.6875)" r="2"></circle></g><g fill="url(#color-6_CGf5JvobsqEu_gr6)"><circle cx="40" cy="32" transform="scale(2.6875,2.6875)" r="2"></circle></g><g fill="url(#color-7_CGf5JvobsqEu_gr7)"><circle cx="28" cy="24" transform="scale(2.6875,2.6875)" r="2"></circle></g></g></g></svg></span><a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      	<a class="nav-link" href="#aboutid">About</a>
      </li>

       <li class="nav-item">
      	<a class="nav-link" href="#sympid">Symptoms</a>
      </li>
     
      <li class="nav-item">
      	<a class="nav-link" href="#preventid">Prevention</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="#worldid">Worlddata</a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link" href="india_covid_data.html">IndiaCoronaLive</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="https://www.cowin.gov.in/" target="_blank">Book Vaccination Slots</a>
      </li>
     
      
     
      </div>
</nav>

<div class="main_header">
	<div class="row w-100 h-100" >
		<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
			<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
				<img src="images/eksath.png" width="300" height="300">
			</div>
		</div>
		<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1" >
			<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
				<h1>Let's Stay safe & Fight Together
					Against Cor <span class="corona_root"><img src="images/virus.png" width="50" height="50"></span> na Virus</h1>
			</div>
		</div>
	</div>
</div>


<!*************************** Corona Latest Update ********************-->

<section class="corona_update container-fluid" id="worldid">
	<div class ="mb-3">
		<h3 class="text-uppercase text-center"> covid-19 Updates</h3>
	</div>
<div class="table-responsive">
  <table class="table table-bordered table-striped text-center" id="tbval">
    <tr>
      <th>Country</th>
      <th>TotalConfirmed</th>
      <th>TotalRecovered</th>
      <th>TotaDeaths</th>
       <th>NewConfirmed</th>
      <th>NewRecovered</th>
      <th>NewDeaths</th>
      
    </tr>
  </table>
</div>
	
	</div>
</section>



<!--************************ About Section **********************************-->
<div class="container-fluid sub-section pt-5 pb-5" id="aboutid">
	<div class="section_header text-center mb-5 mt-4">
		<h1> About COVID-19</h1>
	</div>
	 
	 <div class="row pt-5">
	 	<div class="col-lg-5 col-md-6 col-12 ml-5 about_res">
	 		<img src="images/about_corona.png" class="img-fluid">
	 	</div>
	 	<div class="col-lg-6 col-md-6 col-12">
	 		<h2>What is COVID-19 (CORONA-Virus) </h2>
	 		<p> Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.

Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.

</p>
	 		<p>The best way to prevent and slow down transmission is be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your face. 

</p>
	 	</div>
	 	
	 </div>
</div>

<!--///////////////////////////  Corona symptoms ///////////////////////////-->

<div class="container-fluid  pt-5 pb-5" id="sympid">
	<div class="section_header text-center mb-5 mt-4">
		<h1> Coronavirus symptoms</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-8 col-12 mt-5">
				<figure class="text-center">
				<img src="images/cough.jpg" class="imgfluid bg-info" width="150" height="150">
				<figcaption> Cough</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-8 col-12 mt-5">
				<figure class="text-center">
				<img src="images/runny_nose.png" class="imgfluid bg-info" width="150" height="150">
				<figcaption> RunnyNose</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-8 col-12 mt-5">
				<figure class="text-center">
				<img src="images/fever.png" class="imgfluid bg-info" width="150" height="150">
				<figcaption> Fever</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-8 col-12 mt-5">
				<figure class="text-center">
				<img src="images/cold.jpg" class="imgfluid bg-info" width="150" height="150">
				<figcaption> Cold</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-8 col-12 mt-5">
				<figure class="text-center">
				<img src="images/tired.jpg" class="imgfluid bg-info" width="150" height="150">
				<figcaption> Tiredness</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-8 col-12 mt-5">
				<figure class="text-center">
				<img src="images/breath.png" class="imgfluid bg-info" width="150" height="150">
				<figcaption> Difficult Breathing</figcaption>
				</figure>
			</div>
		</div>

	</div>
</div>




<!--///////////////////////////  Preventions Against Coronavirus ///////////////////////////-->

<div class="container-fluid sub_section pt-5 pb-5 " id="preventid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>  6 Steps Prevention Against Coronavirus </h1>
	</div>

     <div class="container">
     	<div class="row">
     		<div class="col-lg-4 col-md-4 col-12">
     			<div class="row">
     				<div class="col-lg-4 col-md-4 col-12 mt-5" >
     				<figure class="text-center">
				<img src="images/hand_wash.jpg" class="imgfluid bg-info" width="90" height="90">
				</figure>
			
     				</div>
     				<div class="col-lg-8 col-md-8 col-12 mt-5">
     					<p>Wash your hands regulary for 20 seconds, with
				         soap and water or alcohal-based hand rub.</p>
     				</div>
     		</div>


     	</div>


     	<div class="col-lg-4 col-md-4 col-12">
     			<div class="row">
     				<div class="col-lg-4 col-md-4 col-12 mt-5" >
     				<figure class="text-center">
				<img src="images/mask.jpg" class="imgfluid bg-info" width="90" height="90">
				</figure>
			
     				</div>
     				<div class="col-lg-8 col-md-8 col-12 mt-5">
     					<p>Cover your nose and mouth with a disposable
     					tissue or flexed elbow when you cough or sneeze.</p>
     				</div>
     		</div>

     		
     	</div>
     

     <div class="col-lg-4 col-md-4 col-12">
     			<div class="row">
     				<div class="col-lg-4 col-md-4 col-12 mt-5" >
     				<figure class="text-center">
				<img src="images/tine.png" class="imgfluid bg-info" width="90" height="90">
				</figure>
			
     				</div>
     				<div class="col-lg-8 col-md-8 col-12 mt-5">
     					<p>Avoid close contact (1 meter or 3 feet) with
     					people who are unwell.</p>
     				</div>
     		</div>

     		
     	</div>
     
     <div class="col-lg-4 col-md-4 col-12">
     			<div class="row">
     				<div class="col-lg-4 col-md-4 col-12 mt-5" >
     				<figure class="text-center">
				<img src="images/news.png" class="imgfluid bg-info" width="90" height="90">
				</figure>
			
     				</div>
     				<div class="col-lg-8 col-md-8 col-12 mt-5">
     					<p>Stay informed by watching news & follow
     					 the recommended practises.</p>
     				</div>
     		</div>

     		
     	</div>
     
     <div class="col-lg-4 col-md-4 col-12">
     			<div class="row">
     				<div class="col-lg-4 col-md-4 col-12 mt-5" >
     				<figure class="text-center">
				<img src="images/home.jpg" class="imgfluid bg-info" width="90" height="90">
				</figure>
			
     				</div>
     				<div class="col-lg-8 col-md-8 col-12 mt-5">
     					<p>Stay home and self-isolatefrom others
     					in the household if you feel unwell.</p>
     				</div>
     		</div>

     		
     	</div>
     
     <div class="col-lg-4 col-md-4 col-12">
     			<div class="row">
     				<div class="col-lg-4 col-md-4 col-12 mt-5" >
     				<figure class="text-center">
				<img src="images/Symptom 1_2.png" class="imgfluid bg-info" width="90" height="90">
				</figure>
			
     				</div>
     				<div class="col-lg-8 col-md-8 col-12 mt-5">
     					<p>If you have fever, coughand difficulity 
     					breathing,seek medical care early.</p>
     				</div>
     		</div>

     		
     	</div>
     
     </div>



</div>




<!--////////////////////////////////////top cursor ///////////////////////////////// -->

<div class="container scrolltop float-right pr-5">
	<i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
</div>

<!-- //////////////////////  footer ////////////////////////////   -->

<footer class="mt-5">
	<div class="footer_style text-white text-center container-fluid">
		<p>Copyright By Our Team</p>
	</div>
</footer>



<script type="text/javascript">
	mybutton = document.getElementById("myBtn");
// when the user scroll down 20px from the top of the document, show the button
	window.onscroll = function() {scrollFunction()};
	function scrollFunction(){
		if(document.body.scrollTop >100 || document.documentElement.scrollTop >100){
			mybutton.style.display ="block";
		}
		else{
			mybutton.style.display ="none";
		}
	}
	// when the user clicks on the button scroll to the top of the document
	function topFunction(){
		document.body.scrollTop = 0; // for Safari
		document.documentElement.scrollTop = 0; //for chrome, firefox IE and opera
	}







   function fetch(){


    $.get("https://api.covid19api.com/summary",
       
       function (data){
       // console.log(data['Countries'].length);
       var tbval = document.getElementById('tbval');

       for(var i=1; i<(data['Countries'].length); i++ ){
         var x = tbval.insertRow();
         x.insertCell(0);

         tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
         tbval.rows[i].cells[0].style.background = '#7a4a91';
          tbval.rows[i].cells[0].style.color = '#fff';

          x.insertCell(1);
         tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
         tbval.rows[i].cells[1].style.background = '#4bb7d8';
           
             x.insertCell(2);
         tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
         tbval.rows[i].cells[2].style.background = '#4bb7d8';
             
               x.insertCell(3);
         tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
         tbval.rows[i].cells[3].style.background = '#4bb7d8';
            
             x.insertCell(4);
         tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
         tbval.rows[i].cells[4].style.background = '#4bb7d8';
            
            x.insertCell(5);
         tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
         tbval.rows[i].cells[5].style.background = '#4bb7d8';
            
          x.insertCell(6);
         tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
         tbval.rows[i].cells[6].style.background = '#4bb7d8';
            


       }
       }
      
      );
   }




</script>
</body>
</html>


