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
       #backButton {
            display: block;
            margin-top: 20px;
            padding: 10px;
            background-color: #ccc;
            color: #333;
            text-decoration: none;
            border-radius: 4px;
        }
    </style>
    <a href="javascript:history.go(-1)" id="backButton">Back</
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
                <input type="text" name="barangay" placeholder="Barangay" pattern="^(Adlaon|Agsungot|Apas|Babag|Bacayan|Banilad|Basak Pardo|Basak San Nicolas|Binaliw|Bonbon|budla-an|Buhisan|Bulacao|Buot-Taup Pardo|Busay|Calamba|Cambinocot|Capitol Site|Central|Kamputhaw|Carreta|Cogon Pardo|Cogon Ramos|Day-as|Duljo|Ermita|Guadalupe|Guba|Hippodromo|Inayawan|Kalubihan|Kalunasan|Kamagayan|Kasambagan|Kinasang-an Pardo|Labangon|Lahug|Lorega|Lusaran|Luz|Mabini|Mabolo|Malubog|Mambaling|Pahina Central|Pahina San Nicolas|Pamutan|Pardo|Pari-an|Paril|Pasil|Pit-os|Pulangbato|Pung-ol-Sibugay|Punta Princesa|Quiot Pardo|Sambag 1|Sambag 2|San Antonio|San Jose|San Nicolas Central|San Roque|Santa Cruz|Sapangdaku|Sawang Calero|Sinsin|Sirao|Suba Poblacion|Sudlon 1|Sudlon 2|Tabunan|Tagbao|Talamban|Taptap|Tajero|Tinago|Tisa|To-ong Pardo|T. Padilla|Zapatera)$" title="Please enter a valid barangay,with the proper format" required>

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
                <input type="number" name="age" placeholder="Age" required min="18" pattern="\d+">



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
                    <label for="voted_on_2023" class="q1">Have you voted in the last 2023 Barangay Elections?
                        <input type="radio" name="voted_on_2023[]" id="yes1" value ="YES">YES
                        <input type="radio" name="voted_on_2023[]" id="no1" value ="NO">NO
                    </label>
                    
                </div>

                <!-- Checkbox 2 -->
                <div class="checkbox-label">
                    <label for="Organization" id="q1">What organization are you a member of? Please check on the box that applies
                        <input type="checkbox" name="organization[]" id="erpat" value="ERPAT">ERPAT
                        <input type="checkbox" name="organization[]" id="kalipi" value="KALIPI">KALIPI
                        <input type="checkbox" name="organization[]" id="pwd" value="PWD">PWD
                        <input type="checkbox" name="organization[]" id="senior" value="SENIOR CITIZEN">SENIOR CITIZEN
                    </label>
                </div>

                <!-- Checkbox 3 -->
                <div class="checkbox-label">
                    <label for="beneficiary">Have you been a beneficiary of TUPAD, TAPAT, LIVELIHOOD PROGRAMS, etc.?</label>
                    <input type="radio" name="beneficiary[]" id="yes2" value="YES">YES
                    <input type="radio" name="beneficiary[]" id="no2"value="NO">NO
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


