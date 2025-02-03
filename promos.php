<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promos</title>
    <style>
        body {
            background: linear-gradient(180deg, #3c8aff 0%, #000000 31%);
            height: 100vh;
            color: #ffffff;
            font-family: sans-serif;
            overflow-x: hidden;
            background-attachment: fixed;
        }

        .header {
            margin-top: 20px;
            margin-left: 370px;
            height: 145px;
            width: 1000px;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: stretch;
            border-radius: 50px;
            margin-left: 2.5vw;
            background: #000000;
            height: auto;
            width: 92.5vw;
            padding-bottom: 150px;
        }

        .promo_details {
            position: relative;
            top: 40px;
            margin-left: 40px;
            height: auto;
            width: 89vw;
            color: #3c8aff;
            font-weight: bold;
            font-size: larger;
            table-layout: fixed;
            display: flex;
            align-items: flex-start; /* Key change: Align items to the top */
        }

        .promo {
            padding-right: 40px;
            vertical-align: top; /* Ensure image is aligned to top */
        }

        .promo_name {
            vertical-align: top; /* Align text to top */
            padding-bottom: 30px; /* Add some spacing below the name */
            padding-top: 20px;
            font-size: 30px;
            height: 80px;
            width: 1000px;
        }

        .promo_desc {
            vertical-align: top; /* Align text to top */
        }

        #promoImage {
            width: 400px;
            border: 2px solid white;
            border-radius: 20px;
            max-width: 400px;
            height: auto;
        }

        pre {
            vertical-align: top; 
            font-size: 17px;
            font-family:'Arial';
            color: white;
            font-weight: normal; 
            white-space: pre-line;
            max-width: 900px;
            text-align: left;
            margin-left: 0;
        }



    </style>
    <link rel="icon" href="Images/SkyCinemaNew.png">
</head>

<body>
    <img src="Images/Header.png" class="header">
    <div class="container">
        <table class="promo_details">
            <tr>
                <td rowspan="2" class="promo"><img src="" id="promoImage"></td>
                <td colspan="2" class="promo_name" id="promoName"></td>
            </tr>
            <tr>
                <td  class="promo_desc" id="promoDesc"><pre id="desc_text"></pre></td>
            </tr>
        </table>
    </div>

    <script>
        function getParameters() {
            const urlParams = new URLSearchParams(window.location.search);
            const promoImage = urlParams.get('image');
            const promoName = urlParams.get('name');

            document.getElementById('promoImage').src = decodeURIComponent(promoImage);
            document.getElementById('promoName').textContent = decodeURIComponent(promoName);

            displayDescription(); 
        }

        function displayDescription() {
            const Description =
            `Sky Cinemas Singapore is having their CAPTAIN AMERICA: BRAVE NEW WORLD IMAX Mini Poster Giveaway.Be rewarded when you see CAPTAIN AMERICA: BRAVE NEW WORLD in IMAX® theatres.

            Receive an IMAX mini poster with every two (2) CAPTAIN AMERICA: BRAVE NEW WORLD IMAX tickets purchased.

            Available for redemption at the respective Sky Cinemas IMAX box office counters only from 14 February 2025.

            While stocks last. Other terms & conditions apply.

            Terms & Conditions:
            • Every two (2) IMAX® tickets for CAPTAIN AMERICA: BRAVE NEW WORLD entitles the patron to redemption of ONE (1) mini poster. The movie premium can be claimed at the respective Sky Cinemas IMAX® Box Office Counters upon over-the-counter purchase from 17 August 2023.
            • Patrons who have purchased their tickets online or at the self-service kiosks can present their physical movie ticket stubs at the respective Sky Cinemas IMAX® Box Office Counters indicated on the ticket, to redeem the movie premium.
            • Pre-purchase of tickets does NOT guarantee the reservation of the movie premium.
            • Movie premiums are subjected to limited availability on first-come-first-served basis at the point of redemption, while stocks last.
            • Sky Cinemas IMAX® giveaways are not valid with other promotions/giveaways/offers/packages/corporate bookings.
            • The merchandise is non-transferable and non-exchangeable for credit, goods or benefits in kind.
            • Sky Cinemas Pte Ltd shall not be responsible for the quality, merchantability or the fitness of the merchandise.
            • Sky Cinemas Pte Ltd shall not be liable for any claims which may be made by the participants who are unable to redeem the said merchandise or whatsoever.
            • Sky Cinemas Pte Ltd reserves the right to amend the terms and conditions or withdraw any of the merchandise featured at any time without prior notice.
            • In case of any dispute, Sky Cinemas Pte Ltd’s decision shall be final, conclusive and binding.

            Date: 14 February 2025 Onward
            
            Available at: All Sky Cinemas IMAX counters in Singapore`.trim();

            document.getElementById('desc_text').innerHTML = Description;
        }
        window.onload = getParameters;
    </script>

</body>

</html>