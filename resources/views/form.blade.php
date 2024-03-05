<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin-left: 350px;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('/images/form_bg.jpg');
            background-size: cover;
        }

        #form {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            overflow-y: auto;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 0px;
            max-width: 750px; 
            margin: 0 auto;

            overflow-y: auto;
        }

      label {
        display: absolute;
        margin-bottom: 8px;
      }
      input {
        width: 100%;
        padding: 8px;
        margin-bottom: 12px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
      }

      .checkbox-container {
            display: absolute;
            align-items: le;
            justify-content: flex-start;
        }

        .checkbox-label {
            margin-right: 500px;
            
        }

      #termsCheckbox {
        margin-left: 8px;
      }

      button {
        grid-column: span 4;
        background-color: #4caf50;
        color: #fff;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      button:hover {
        background-color: #45a049;
      }

      .scroll-box {
            overflow: auto;
            max-height: 350px; 
      }
      .label {
            display: flex;
            width: 150px;
            margin-right: 10px;
            text-align: center;
         
      }
      #logo {
            position: absolute;
            bottom:510px; 
            right: 10px; 
            max-width: 250px; 
            height: auto;
        }
        #yogicares {
            position: absolute;
            top: 50px;
            right: 340px;
            border-radius:20px;
            width: 600px;
            height: auto;
        }
       #submit{
        margin-top:20px;
       }
    </style>
    <body>
    <div>
        <img src="/images/logo.png" alt="Extra Image" id = "logo">
        <img src="/images/yogicares.png" alt="Extra Image" id = "yogicares">
    </div>
    <div class="scroll-box">
        <form action="{{ url('/your-route') }}" method="post">
            @csrf
            <div id="form">
                <label for="barangay" class="">Barangay</label>
                <input type="text" name="barangay" placeholder="Barangay"required>

                <label for="sitio">Sitio Name:</label>
                <input type="text" name="sitio" placeholder="Sitio"required>

                <label for="precint#">Precinct # :</label>
                <input type="text" name="precint#" placeholder="Precint#"required>

                <label for="question_leader">WHO IS YOUR SITIO LEADER? </label>
                <input type="text" name="sitio_leader" placeholder="Sitio Leader"required>

                <label for="firstname">First Name</label>
                <input type="text" name="firstname" placeholder="First Name"required>
                
                <label for="fb_account">FB Account</label>
                <input type="text" name="fb_account" placeholder="FB Account"required>

                <label for="middlename">Middle Name</label>
                <input type="text" name="middlename" id="middlename" placeholder="Middle Name" pattern="^(?!.{1,2}$)[a-zA-Z0-9\s]+$" title="Invalid input. Please enter more than 2 characters, symbols, or numbers." required>
        
                <label for="nickname">Nickname</label>
                <input type="text" name="nickname" placeholder="Nickname">

                <label for="lastname">Last Name</label>
                <input type="text" name="lastname" placeholder="Last Name"required>

                <label for="age">Age</label>
                <input type="text" name="age" placeholder="Age"required>


                <label for="contact">Contact #</label>
                <input type="text" name="contact" id="contact" pattern="\d*" title="Please enter only numbers" placeholder="Contact" required/>

                <label for="address">Address</label>
                <input type="text" name="address" placeholder="Address"required>

                <label for="occupation">Occupation</label>
                <input type="text" name="occupation" placeholder="Occupation"required>
            </div>
            <div class="checkbox-container">
                <!-- Checkbox 1 -->
                <div class="checkbox-label">
                    <label for="q1" class="q1">Have you voted in the last 2023 Barangay Elections?</label>
                    <input type="checkbox" name="yes">YES
                    <input type="checkbox" name="no">NO
                </div>

                <!-- Checkbox 2 -->
                <div class="checkbox-label">
                    <label for="q2" id="q1">What organization are you a member of? Please check on the box that applies</label>
                    <input type="checkbox" name="erpat">ERPAT
                    <input type="checkbox" name="kalipi">KALIPI
                    <input type="checkbox" name="pwd">PWD
                    <input type="checkbox" name="senior">SENIOR CITIZEN
                </div>

                <!-- Checkbox 3 -->
                <div class="checkbox-label">
                    <label for="q3">Have you been a beneficiary of TUPAD, TAPAT, LIVELIHOOD PROGRAMS, etc.?</label>
                    <input type="checkbox" id="yes">YES
                    <input type="checkbox" id="no">NO
                </div>

                <!-- Checkbox 4 -->
                <div class="checkbox-label">
                    <input type="checkbox" id="termsCheckbox">
                    <label for="termsCheckbox">I hereby confirm and consent to being a member of YOGI CARES,
                        acknowledging my willingness to participate and engage in the
                        activities and services provided by the organization. I understand
                        and accept the terms and conditions outlined in the membership
                        agreement
                    </label>
                </div>
            </div>
            <button type="submit" id="submit">Submit</button>
        </form>
    </div>
</body>
</html>


