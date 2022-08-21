<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />


<style>
	/* Import Google font - Poppins */
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');



	::selection {
		color: #fff;
		background: #0D6EFD;
	}

	.modal-message-form-wrapper {
		width: 715px;
		background: #fff;
		border-radius: 5px;
		box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.05);
	}

	.modal-message-form-wrapper header {
		font-size: 22px;
		font-weight: 600;
		padding: 20px 30px;
		border-bottom: 1px solid #ccc;
	}

	.modal-message-form-wrapper form#modal-message-form{
		margin: 35px 30px;
	}

	.modal-message-form-wrapper form.disabled {
		pointer-events: none;
		opacity: 0.7;
	}

	form#modal-message-form.dbl-field {
		display: flex;
		margin-bottom: 25px;
		justify-content: space-between;
	}

	.dbl-field .field {
		height: 50px;
		display: flex;
		position: relative;
		width: calc(100% / 2 - 13px);
	}

	.modal-message-form-wrapper form#modal-message-formi {
		position: absolute;
		top: 50%;
		left: 18px;
		color: #ccc;
		font-size: 17px;
		pointer-events: none;
		transform: translateY(-50%);
	}

	form#modal-message-form.field input,
	form#modal-message-form.message textarea {
		width: 100%;
		height: 100%;
		outline: none;
		padding: 0 18px 0 48px;
		font-size: 16px;
		border-radius: 5px;
		border: 1px solid #ccc;
	}

	.field input::placeholder,
	.message textarea::placeholder {
		color: #ccc;
	}

	.field input:focus,
	.message textarea:focus {
		padding-left: 47px;
		border: 2px solid #0D6EFD;
	}

	.field input:focus~i,
	.message textarea:focus~i {
		color: #0D6EFD;
	}

	form#modal-message-form.message {
		position: relative;
	}

	form#modal-message-form.message i {
		top: 30px;
		font-size: 20px;
	}

	form#modal-message-form.message textarea {
		min-height: 130px;
		max-height: 230px;
		max-width: 100%;
		min-width: 100%;
		padding: 15px 20px 0 48px;
	}

	form#modal-message-form.message textarea::-webkit-scrollbar {
		width: 0px;
	}

	.message textarea:focus {
		padding-top: 14px;
	}

	form#modal-message-form.button-area {
		margin: 25px 0;
		display: flex;
		align-items: center;
	}

	.button-area button {
		color: #fff;
		border: none;
		outline: none;
		font-size: 18px;
		cursor: pointer;
		border-radius: 5px;
		padding: 13px 25px;
		background: #0D6EFD;
		transition: all 0.3s ease;
	}

	.button-area button:hover {
		background: #025ce3;
	}

	.button-area span {
		font-size: 17px;
		margin-left: 30px;
		display: none;
	}

	@media (max-width: 600px) {
		.modal-message-form-wrapper header {
			text-align: center;
		}

		.modal-message-form-wrapper form#modal-message-form{
			margin: 35px 20px;
		}

		form#modal-message-form.dbl-field {
			flex-direction: column;
			margin-bottom: 0px;
		}

		form#modal-message-form.dbl-field .field {
			width: 100%;
			height: 45px;
			margin-bottom: 20px;
		}

		form#modal-message-form.message textarea {
			resize: none;
		}

		form#modal-message-form.button-area {
			margin-top: 20px;
			flex-direction: column;
		}

		.button-area button {
			width: 100%;
			padding: 11px 0;
			font-size: 16px;
		}

		.button-area span {
			margin: 20px 0 0;
			text-align: center;
		}
	}
</style>


</head>

<body>
	<div class="modal-message-form-wrapper">
		<!-- <header>Send us a Message</header> -->
		<form action="#" id="modal-message-form">
			<div class="dbl-field">
				<div class="field">
					<input type="text" name="name" placeholder="Enter your name">
					<i class='fas fa-user'></i>
				</div>
				<div class="field">
					<input type="text" name="email" placeholder="Enter your email">
					<i class='fas fa-envelope'></i>
				</div>
			</div>
			<div class="dbl-field">
				<div class="field">
					<input type="text" name="phone" placeholder="Enter your phone">
					<i class='fas fa-phone-alt'></i>
				</div>
				<div class="field">
					<input type="text" name="website" placeholder="Enter your website">
					<i class='fas fa-globe'></i>
				</div>
			</div>
			<div class="message">
				<textarea placeholder="Write your message" name="message"></textarea>
				<i class="material-icons">message</i>
			</div>
			<div class="button-area">
				<button type="submit" class="button">Send Message</button>
				<span></span>
			</div>
		</form>
	</div>

	<script>
		//Contact form#modal-message-formin PHP
		const form = document.querySelector("#modal-message-form"),
			statusTxt = form.querySelector(".button-area span");
		form.onsubmit = (e) => {
			e.preventDefault();
			statusTxt.style.color = "#0D6EFD";
			statusTxt.style.display = "block";
			statusTxt.innerText = "Sending your message...";
			form.classList.add("disabled");

			let xhr = new XMLHttpRequest();
			let form_mailer_url = "xxx-form-mailer.php";
			xhr.open('POST', form_mailer_url, true);
			xhr.onload = () => {
				if (xhr.readyState == 4 && xhr.status == 200) {
					let response = xhr.response;
					if (response.indexOf("required") != -1 || response.indexOf("valid") != -1 || response.indexOf(
							"failed") != -1) {
						statusTxt.style.color = "red";
					} else {
						form.reset();
						setTimeout(() => {
							statusTxt.style.display = "none";
						}, 3000);
					}
					statusTxt.innerText = response;
					form.classList.remove("disabled");
				}
			}
			let formData = new FormData(form);
			xhr.send(formData);
		}
	</script>