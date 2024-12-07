<?php include "header.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/mechanic.css?v=<?php echo time() ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Mechanics</title>
    <script>
        const mechanicsData = {
                "Abia": [
                    {
                        "company": "Pamautos Limited",
                        "address": "3 Nwankpa Close, off Okporo Road, Abia",
                        "phone": "08038351214"
                    },
                    {
                        "company": "Ability in God Auto workshop",
                        "address": "184 Aba-Owerri Rd, Abayi, Aba 453115, Abia",
                        "phone": "08136883503"
                    },
                    {
                        "company": "CHIPET AUTOMOBILE",
                        "address": "Deeper life camp ground junction near laoji merket, Aba",
                        "phone": "08109510647"
                    },
                    {
                        "company": "SIMA AUTO TECH.",
                        "address": "Plot 107 Umuojima Rd, Abayi, Aba 453111, Abia",
                        "phone": "08069006048"
                    }
                ],
                "Adamawa": [
                    {
                        "company": "Bomaco Auto Center",
                        "address": "No 12 Jacob Street",
                        "phone": "08038351214"
                    },
                    {
                        "company": "HN Automobiles Centre",
                        "address": "No 42 Ibitayo Street",
                        "phone": "08076703333"
                    },
                    {
                        "company": "Defem Auto Care Ltd",
                        "address": "No 54 Orekoya Street",
                        "phone": "08033080777"
                    },
                    {
                        "company": "Fola Auto Mechanic",
                        "address": "No 18 St John Street",
                        "phone": "08022686945"
                    }
                ],
                "Akwa Ibom": [
                    {
                        "company": "Bomaco Auto Center",
                        "address": "No 12 Jacob Street",
                        "phone": "08038351214"
                    },
                    {
                        "company": "HN Automobiles Centre",
                        "address": "No 42 Ibitayo Street",
                        "phone": "08076703333"
                    },
                    {
                        "company": "Defem Auto Care Ltd",
                        "address": "No 54 Orekoya Street",
                        "phone": "08033080777"
                    },
                    {
                        "company": "Fola Auto Mechanic",
                        "address": "No 18 St John Street",
                        "phone": "08022686945"
                    }
                ],
                "Anambra": [
                    {
                        "company": "Bomaco Auto Center",
                        "address": "No 12 Jacob Street",
                        "phone": "08038351214"
                    },
                    {
                        "company": "HN Automobiles Centre",
                        "address": "No 42 Ibitayo Street",
                        "phone": "08076703333"
                    },
                    {
                        "company": "Defem Auto Care Ltd",
                        "address": "No 54 Orekoya Street",
                        "phone": "08033080777"
                    },
                    {
                        "company": "Fola Auto Mechanic",
                        "address": "No 18 St John Street",
                        "phone": "08022686945"
                    }
                ],
                "Bauchi": [
                    {
                        "company": "Bomaco Auto Center",
                        "address": "No 12 Jacob Street",
                        "phone": "08038351214"
                    },
                    {
                        "company": "HN Automobiles Centre",
                        "address": "No 42 Ibitayo Street",
                        "phone": "08076703333"
                    },
                    {
                        "company": "Defem Auto Care Ltd",
                        "address": "No 54 Orekoya Street",
                        "phone": "08033080777"
                    },
                    {
                        "company": "Fola Auto Mechanic",
                        "address": "No 18 St John Street",
                        "phone": "08022686945"
                    }
                ],
                "Bayelsa": [
                    {
                        "company": "Bomaco Auto Center",
                        "address": "No 12 Jacob Street",
                        "phone": "08038351214"
                    },
                    {
                        "company": "HN Automobiles Centre",
                        "address": "No 42 Ibitayo Street",
                        "phone": "08076703333"
                    },
                    {
                        "company": "Defem Auto Care Ltd",
                        "address": "No 54 Orekoya Street",
                        "phone": "08033080777"
                    },
                    {
                        "company": "Fola Auto Mechanic",
                        "address": "No 18 St John Street",
                        "phone": "08022686945"
                    }
                ],
                "Benue": [
                    {
                        "company": "Bomaco Auto Center",
                        "address": "No 12 Jacob Street",
                        "phone": "08038351214"
                    },
                    {
                        "company": "HN Automobiles Centre",
                        "address": "No 42 Ibitayo Street",
                        "phone": "08076703333"
                    },
                    {
                        "company": "Defem Auto Care Ltd",
                        "address": "No 54 Orekoya Street",
                        "phone": "08033080777"
                    },
                    {
                        "company": "Fola Auto Mechanic",
                        "address": "No 18 St John Street",
                        "phone": "08022686945"
                    }
                ],
                "Borno": [
                    {
                        "company": "Bomaco Auto Center",
                        "address": "No 12 Jacob Street",
                        "phone": "08038351214"
                    },
                    {
                        "company": "HN Automobiles Centre",
                        "address": "No 42 Ibitayo Street",
                        "phone": "08076703333"
                    },
                    {
                        "company": "Defem Auto Care Ltd",
                        "address": "No 54 Orekoya Street",
                        "phone": "08033080777"
                    },
                    {
                        "company": "Fola Auto Mechanic",
                        "address": "No 18 St John Street",
                        "phone": "08022686945"
                    }
                ],
                "Cross River": [
                    {
                        "company": "Bomaco Auto Center",
                        "address": "No 12 Jacob Street",
                        "phone": "08038351214"
                    },
                    {
                        "company": "HN Automobiles Centre",
                        "address": "No 42 Ibitayo Street",
                        "phone": "08076703333"
                    },
                    {
                        "company": "Defem Auto Care Ltd",
                        "address": "No 54 Orekoya Street",
                        "phone": "08033080777"
                    },
                    {
                        "company": "Fola Auto Mechanic",
                        "address": "No 18 St John Street",
                        "phone": "08022686945"
                    }
                ],
                "Delta": [
                    {
                        "company": "Bomaco Auto Center",
                        "address": "No 12 Jacob Street",
                        "phone": "08038351214"
                    },
                    {
                        "company": "HN Automobiles Centre",
                        "address": "No 42 Ibitayo Street",
                        "phone": "08076703333"
                    },
                    {
                        "company": "Defem Auto Care Ltd",
                        "address": "No 54 Orekoya Street",
                        "phone": "08033080777"
                    },
                    {
                        "company": "Fola Auto Mechanic",
                        "address": "No 18 St John Street",
                        "phone": "08022686945"
                    }
                ],
                "Ebonyi": [
                    {
                        "company": "Bomaco Auto Center",
                        "address": "No 12 Jacob Street",
                        "phone": "08038351214"
                    },
                    {
                        "company": "HN Automobiles Centre",
                        "address": "No 42 Ibitayo Street",
                        "phone": "08076703333"
                    },
                    {
                        "company": "Defem Auto Care Ltd",
                        "address": "No 54 Orekoya Street",
                        "phone": "08033080777"
                    },
                    {
                        "company": "Fola Auto Mechanic",
                        "address": "No 18 St John Street",
                        "phone": "08022686945"
                    }
                ],
                "Edo": [
                    {
                        "company": "Bomaco Auto Center",
                        "address": "No 12 Jacob Street",
                        "phone": "08038351214"
                    },
                    {
                        "company": "HN Automobiles Centre",
                        "address": "No 42 Ibitayo Street",
                        "phone": "08076703333"
                    },
                    {
                        "company": "Defem Auto Care Ltd",
                        "address": "No 54 Orekoya Street",
                        "phone": "08033080777"
                    },
                    {
                        "company": "Fola Auto Mechanic",
                        "address": "No 18 St John Street",
                        "phone": "08022686945"
                    }
                ],
                "Ekiti": [
                    {
                        "company": "Bomaco Auto Center",
                        "address": "No 12 Jacob Street",
                        "phone": "08038351214"
                    },
                    {
                        "company": "HN Automobiles Centre",
                        "address": "No 42 Ibitayo Street",
                        "phone": "08076703333"
                    },
                    {
                        "company": "Defem Auto Care Ltd",
                        "address": "No 54 Orekoya Street",
                        "phone": "08033080777"
                    },
                    {
                        "company": "Fola Auto Mechanic",
                        "address": "No 18 St John Street",
                        "phone": "08022686945"
                    }
                ],
                "Enugu": [
                    {
                        "company": "Bomaco Auto Center",
                        "address": "No 12 Jacob Street",
                        "phone": "08038351214"
                    },
                    {
                        "company": "HN Automobiles Centre",
                        "address": "No 42 Ibitayo Street",
                        "phone": "08076703333"
                    },
                    {
                        "company": "Defem Auto Care Ltd",
                        "address": "No 54 Orekoya Street",
                        "phone": "08033080777"
                    },
                    {
                        "company": "Fola Auto Mechanic",
                        "address": "No 18 St John Street",
                        "phone": "08022686945"
                    }
                ],
                "Gombe": [
                    {
                        "company": "Bomaco Auto Center",
                        "address": "No 12 Jacob Street",
                        "phone": "08038351214"
                    },
                    {
                        "company": "HN Automobiles Centre",
                        "address": "No 42 Ibitayo Street",
                        "phone": "08076703333"
                    },
                    {
                        "company": "Defem Auto Care Ltd",
                        "address": "No 54 Orekoya Street",
                        "phone": "08033080777"
                    },
                    {
                        "company": "Fola Auto Mechanic",
                        "address": "No 18 St John Street",
                        "phone": "08022686945"
                    }
                ],
                "Imo": [
                    {
                        "company": "Bomaco Auto Center",
                        "address": "No 12 Jacob Street",
                        "phone": "08038351214"
                    },
                    {
                        "company": "HN Automobiles Centre",
                        "address": "No 42 Ibitayo Street",
                        "phone": "08076703333"
                    },
                    {
                        "company": "Defem Auto Care Ltd",
                        "address": "No 54 Orekoya Street",
                        "phone": "08033080777"
                    },
                    {
                        "company": "Fola Auto Mechanic",
                        "address": "No 18 St John Street",
                        "phone": "08022686945"
                    }
                ],
                "Jigawa": [
                    {
                        "company": "Bomaco Auto Center",
                        "address": "No 12 Jacob Street",
                        "phone": "08038351214"
                    },
                    {
                        "company": "HN Automobiles Centre",
                        "address": "No 42 Ibitayo Street",
                        "phone": "08076703333"
                    },
                    {
                        "company": "Defem Auto Care Ltd",
                        "address": "No 54 Orekoya Street",
                        "phone": "08033080777"
                    },
                    {
                        "company": "Fola Auto Mechanic",
                        "address": "No 18 St John Street",
                        "phone": "08022686945"
                    }
                ],
                "Kaduna": [
                    {
                        "company": "De Best Auto Repairs",
                        "address": "Ibrahim Taiwo Road, Kaduna South",
                        "phone": "0803 341 2145"
                    },
                    {
                        "company": "Kaduna Vehicle Workshop",
                        "address": "No 12 Ali Akilu Road, Ungwan Sarki",
                        "phone": "0806 672 9350"
                    },
                    {
                        "company": "Sani Mechanic Hub",
                        "address": "Ahmadu Bello Way, Kawo",
                        "phone": "0812 457 6632"
                    }
                ],
                "Kano": [
                    {
                        "company": "Bomaco Auto Center",
                        "address": "No 12 Jacob Street",
                        "phone": "08038351214"
                    },
                    {
                        "company": "HN Automobiles Centre",
                        "address": "No 42 Ibitayo Street",
                        "phone": "08076703333"
                    },
                    {
                        "company": "Defem Auto Care Ltd",
                        "address": "No 54 Orekoya Street",
                        "phone": "08033080777"
                    },
                    {
                        "company": "Fola Auto Mechanic",
                        "address": "No 18 St John Street",
                        "phone": "08022686945"
                    }
                ],
                "Katsina": [
                    {
                        "company": "Bomaco Auto Center",
                        "address": "No 12 Jacob Street",
                        "phone": "08038351214"
                    },
                    {
                        "company": "HN Automobiles Centre",
                        "address": "No 42 Ibitayo Street",
                        "phone": "08076703333"
                    },
                    {
                        "company": "Defem Auto Care Ltd",
                        "address": "No 54 Orekoya Street",
                        "phone": "08033080777"
                    },
                    {
                        "company": "Fola Auto Mechanic",
                        "address": "No 18 St John Street",
                        "phone": "08022686945"
                    }
                ],
                "Kebbi": [
                    {
                        "company": "Bomaco Auto Center",
                        "address": "No 12 Jacob Street",
                        "phone": "08038351214"
                    },
                    {
                        "company": "HN Automobiles Centre",
                        "address": "No 42 Ibitayo Street",
                        "phone": "08076703333"
                    },
                    {
                        "company": "Defem Auto Care Ltd",
                        "address": "No 54 Orekoya Street",
                        "phone": "08033080777"
                    },
                    {
                        "company": "Fola Auto Mechanic",
                        "address": "No 18 St John Street",
                        "phone": "08022686945"
                    }
                ],
                "Kogi": [
                    {
                        "company": "Bomaco Auto Center",
                        "address": "No 12 Jacob Street",
                        "phone": "08038351214"
                    },
                    {
                        "company": "HN Automobiles Centre",
                        "address": "No 42 Ibitayo Street",
                        "phone": "08076703333"
                    },
                    {
                        "company": "Defem Auto Care Ltd",
                        "address": "No 54 Orekoya Street",
                        "phone": "08033080777"
                    },
                    {
                        "company": "Fola Auto Mechanic",
                        "address": "No 18 St John Street",
                        "phone": "08022686945"
                    }
                ],
                "Kwara": [
                    {
                        "company": "Bomaco Auto Center",
                        "address": "No 12 Jacob Street",
                        "phone": "08038351214"
                    },
                    {
                        "company": "HN Automobiles Centre",
                        "address": "No 42 Ibitayo Street",
                        "phone": "08076703333"
                    },
                    {
                        "company": "Defem Auto Care Ltd",
                        "address": "No 54 Orekoya Street",
                        "phone": "08033080777"
                    },
                    {
                        "company": "Fola Auto Mechanic",
                        "address": "No 18 St John Street",
                        "phone": "08022686945"
                    }
                ],
                "Lagos": [
                    {
                        "company": "Lekki Auto Services Limited",
                        "address": "Lekki-Epe Expressway, Lakowe, Ibeju-Lekki",
                        "phone": "0808 990 5119"
                    },
                    {
                        "company": "Adis Automobile Engineering",
                        "address": "25 Sadiku Street, Shogunle",
                        "phone": "0802 417 0903"
                    },
                    {
                        "company": "Affordable Solutions",
                        "address": "18 Edun Allaran Road, Ahmadiyya, Ojokoro",
                        "phone": "0803 576 5788"
                    },
                    {
                        "company": "Ade Auto Engineering Works",
                        "address": "32 Owokanmi Road, Idimu Alimosho",
                        "phone": "0802 352 3007"
                    }
                ],
                "Nasarawa": [
                    {
                        "company": "Bomaco Auto Center",
                        "address": "No 12 Jacob Street",
                        "phone": "08038351214"
                    },
                    {
                        "company": "HN Automobiles Centre",
                        "address": "No 42 Ibitayo Street",
                        "phone": "08076703333"
                    },
                    {
                        "company": "Defem Auto Care Ltd",
                        "address": "No 54 Orekoya Street",
                        "phone": "08033080777"
                    },
                    {
                        "company": "Fola Auto Mechanic",
                        "address": "No 18 St John Street",
                        "phone": "08022686945"
                    }
                ],
                "Niger": [
                    {
                        "company": "Bomaco Auto Center",
                        "address": "No 12 Jacob Street",
                        "phone": "08038351214"
                    },
                    {
                        "company": "HN Automobiles Centre",
                        "address": "No 42 Ibitayo Street",
                        "phone": "08076703333"
                    },
                    {
                        "company": "Defem Auto Care Ltd",
                        "address": "No 54 Orekoya Street",
                        "phone": "08033080777"
                    },
                    {
                        "company": "Fola Auto Mechanic",
                        "address": "No 18 St John Street",
                        "phone": "08022686945"
                    }
                ],
                "Ogun": [
                    {
                        "company": "Bomaco Auto Center",
                        "address": "No 12 Jacob Street, Abeokuta",
                        "phone": "0803 835 1214"
                    },
                    {
                        "company": "HN Automobiles Centre",
                        "address": "No 42 Ibitayo Street, Abeokuta",
                        "phone": "0807 670 3333"
                    },
                    {
                        "company": "Defem Auto Care Ltd",
                        "address": "No 54 Orekoya Street, Abeokuta",
                        "phone": "0803 308 0777"
                    },
                    {
                        "company": "Fola Auto Mechanic",
                        "address": "No 18 St John Street, Abeokuta",
                        "phone": "0802 268 6945"
                    }
                ],
                "Ondo": [
                    {
                        "company": "Bomaco Auto Center",
                        "address": "No 12 Jacob Street",
                        "phone": "08038351214"
                    },
                    {
                        "company": "HN Automobiles Centre",
                        "address": "No 42 Ibitayo Street",
                        "phone": "08076703333"
                    },
                    {
                        "company": "Defem Auto Care Ltd",
                        "address": "No 54 Orekoya Street",
                        "phone": "08033080777"
                    },
                    {
                        "company": "Fola Auto Mechanic",
                        "address": "No 18 St John Street",
                        "phone": "08022686945"
                    }
                ],
                "Osun": [
                    {
                        "company": "Bomaco Auto Center",
                        "address": "No 12 Jacob Street",
                        "phone": "08038351214"
                    },
                    {
                        "company": "HN Automobiles Centre",
                        "address": "No 42 Ibitayo Street",
                        "phone": "08076703333"
                    },
                    {
                        "company": "Defem Auto Care Ltd",
                        "address": "No 54 Orekoya Street",
                        "phone": "08033080777"
                    },
                    {
                        "company": "Fola Auto Mechanic",
                        "address": "No 18 St John Street",
                        "phone": "08022686945"
                    }
                ],
                "Oyo": [
                    {
                        "company": "Bomaco Auto Center",
                        "address": "No 12 Jacob Street",
                        "phone": "08038351214"
                    },
                    {
                        "company": "HN Automobiles Centre",
                        "address": "No 42 Ibitayo Street",
                        "phone": "08076703333"
                    },
                    {
                        "company": "Defem Auto Care Ltd",
                        "address": "No 54 Orekoya Street",
                        "phone": "08033080777"
                    },
                    {
                        "company": "Fola Auto Mechanic",
                        "address": "No 18 St John Street",
                        "phone": "08022686945"
                    }
                ],
                "Plateau": [
                    {
                        "company": "Bomaco Auto Center",
                        "address": "No 12 Jacob Street",
                        "phone": "08038351214"
                    },
                    {
                        "company": "HN Automobiles Centre",
                        "address": "No 42 Ibitayo Street",
                        "phone": "08076703333"
                    },
                    {
                        "company": "Defem Auto Care Ltd",
                        "address": "No 54 Orekoya Street",
                        "phone": "08033080777"
                    },
                    {
                        "company": "Fola Auto Mechanic",
                        "address": "No 18 St John Street",
                        "phone": "08022686945"
                    }
                ],
                "Rivers": [
                    {
                        "company": "Chistan Automobile Services",
                        "address": "Mini Orlu Road, Off Ada George",
                        "phone": "0803 711 2376"
                    },
                    {
                        "company": "Crycent Car Care Center",
                        "address": "No 23 East-West Road, Eleme",
                        "phone": "0813 121 9581"
                    },
                    {
                        "company": "Dessy B Autos",
                        "address": "Opposite OPM Church, Km 68 New Airport Road",
                        "phone": "0803 870 9476"
                    },
                    {
                        "company": "Ojuri Auto Technical Services",
                        "address": "No 76 Trans Amadi, Behind Kingfisher",
                        "phone": "0803 711 8569"
                    }
                ],
                "Sokoto": [
                    {
                        "company": "Bomaco Auto Center",
                        "address": "No 12 Jacob Street",
                        "phone": "08038351214"
                    },
                    {
                        "company": "HN Automobiles Centre",
                        "address": "No 42 Ibitayo Street",
                        "phone": "08076703333"
                    },
                    {
                        "company": "Defem Auto Care Ltd",
                        "address": "No 54 Orekoya Street",
                        "phone": "08033080777"
                    },
                    {
                        "company": "Fola Auto Mechanic",
                        "address": "No 18 St John Street",
                        "phone": "08022686945"
                    }
                ],
                "Taraba": [
                    {
                        "company": "Bomaco Auto Center",
                        "address": "No 12 Jacob Street",
                        "phone": "08038351214"
                    },
                    {
                        "company": "HN Automobiles Centre",
                        "address": "No 42 Ibitayo Street",
                        "phone": "08076703333"
                    },
                    {
                        "company": "Defem Auto Care Ltd",
                        "address": "No 54 Orekoya Street",
                        "phone": "08033080777"
                    },
                    {
                        "company": "Fola Auto Mechanic",
                        "address": "No 18 St John Street",
                        "phone": "08022686945"
                    }
                ],
                "Yobe": [
                    {
                        "company": "Bomaco Auto Center",
                        "address": "No 12 Jacob Street",
                        "phone": "08038351214"
                    },
                    {
                        "company": "HN Automobiles Centre",
                        "address": "No 42 Ibitayo Street",
                        "phone": "08076703333"
                    },
                    {
                        "company": "Defem Auto Care Ltd",
                        "address": "No 54 Orekoya Street",
                        "phone": "08033080777"
                    },
                    {
                        "company": "Fola Auto Mechanic",
                        "address": "No 18 St John Street",
                        "phone": "08022686945"
                    }
                ],
                "Zamfara": [
                    {
                        "company": "Bomaco Auto Center",
                        "address": "No 12 Jacob Street",
                        "phone": "08038351214"
                    },
                    {
                        "company": "HN Automobiles Centre",
                        "address": "No 42 Ibitayo Street",
                        "phone": "08076703333"
                    },
                    {
                        "company": "Defem Auto Care Ltd",
                        "address": "No 54 Orekoya Street",
                        "phone": "08033080777"
                    },
                    {
                        "company": "Fola Auto Mechanic",
                        "address": "No 18 St John Street",
                        "phone": "08022686945"
                    }
                ],
                "FCT": [
                    {
                        "company": "Bomaco Auto Center",
                        "address": "No 12 Jacob Street",
                        "phone": "08038351214"
                    },
                    {
                        "company": "HN Automobiles Centre",
                        "address": "No 42 Ibitayo Street",
                        "phone": "08076703333"
                    },
                    {
                        "company": "Defem Auto Care Ltd",
                        "address": "No 54 Orekoya Street",
                        "phone": "08033080777"
                    },
                    {
                        "company": "Fola Auto Mechanic",
                        "address": "No 18 St John Street",
                        "phone": "08022686945"
                    }
                ]
        };

        function updateMechanics() {
            const state = document.getElementById('stateDropdown').value;
            const mechanicsContainer = document.getElementById('mechanicsContainer');
            mechanicsContainer.innerHTML = '';

            if (mechanicsData[state]) {
                mechanicsData[state].forEach(mechanic => {
                    mechanicsContainer.innerHTML += `
                        <div class="ser_cont">
                            <div class="img_cont"></div>
                            <h4>Company: ${mechanic.company}</h4>
                            <h4>Address: ${mechanic.address}</h4>
                            <h4>Phone no: ${mechanic.phone}</h4>
                            <button>Request Service</button>
                        </div>
                    `;
                });
            } else {
                mechanicsContainer.innerHTML = '<p>No mechanics registered in this state yet.</p>';
            }
        }
    </script>
</head>
<body>
    <div class="cont cont1">
        <div class="overlay">
            <div class="cent"></div>
        </div>

        <div class="mini_pill">
            <div class="automated">
                <h1>Find Mechanics Near You</h1>
                <h4>Never worry about any car damages.</h4>
                <a href=""><button>Find Now</button></a>
            </div>
        </div>
    </div>

    <div class="cont cont2">
        <div class="cent">
            <h1>Find registered Mechanics near you:</h1>
                <select id="stateDropdown" onchange="updateMechanics()">
                <h1><option value="">--SELECT A STATE--</option></h1>
                <option value="Abia">Abia</option>
                <option value="Adamawa">Adamawa</option>
                <option value="Akwa Ibom">Akwa Ibom</option>
                <option value="Anambra">Anambra</option>
                <option value="Bauchi">Bauchi</option>
                <option value="Bayelsa">Bayelsa</option>
                <option value="Benue">Benue</option>
                <option value="Borno">Borno</option>
                <option value="Cross River">Cross River</option>
                <option value="Delta">Delta</option>
                <option value="Ebonyi">Ebonyi</option>
                <option value="Edo">Edo</option>
                <option value="Ekiti">Ekiti</option>
                <option value="Enugu">Enugu</option>
                <option value="Gombe">Gombe</option>
                <option value="Imo">Imo</option>
                <option value="Jigawa">Jigawa</option>
                <option value="Kaduna">Kaduna</option>
                <option value="Kano">Kano</option>
                <option value="Katsina">Katsina</option>
                <option value="Kebbi">Kebbi</option>
                <option value="Kogi">Kogi</option>
                <option value="Kwara">Kwara</option>
                <option value="Lagos">Lagos</option>
                <option value="Nasarawa">Nasarawa</option>
                <option value="Niger">Niger</option>
                <option value="Ogun">Ogun</option>
                <option value="Ondo">Ondo</option>
                <option value="Osun">Osun</option>
                <option value="Oyo">Oyo</option>
                <option value="Plateau">Plateau</option>
                <option value="Rivers">Rivers</option>
                <option value="Sokoto">Sokoto</option>
                <option value="Taraba">Taraba</option>
                <option value="Yobe">Yobe</option>
                <option value="Zamfara">Zamfara</option>
                <option value="FCT">FCT</option>
            </select>


            <h1>Registered Mechanics:</h1>
            <div id="mechanicsContainer" class="nearby_cont">
                <p>SELECT YOUR STATE TO VIEW MECHANICS IN YOUR STATE.</p>
            </div>
        </div>
    </div>

    <?php include "footer.php"; ?>
</body>
</html>
