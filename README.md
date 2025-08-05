# BG Know-How

A website about Hearthstone Battlegrounds, formerly hosted for 2.5 years at https://bgknowhow.com.<br><br>
Discontinued since the end of Season 10 (July 2025) due to time constrains.<br>
You can still check out a demo on the test environment http://sat.bgknowhow.com/ (data frozen on BG patch 31.6.2).<br><br>
If you intend to set up something like this I'd suggest writing an automatic patch interpreter (to constantly update your database), first.
Blizzard likes to wildly switch card texts and stats around, especially in Battlegrounds, and you won't be able to stay up to date manually.
<br><br>
The only JavaScript utilized is for the image tooltips, Google Analytics and the Paypal donation button.<br>
Other than that everything is handled by HTML/CSS supported by PHP for dynamic user interaction.

# Installation

There is no fancy build or pipeline setup needed, at the moment. Every push to the main branch will trigger a GitHub action to deploy the main branch to the FTP of the website host. Connections to the MySQL DB and the Blizzard API access is defined in the config directory (overwritten with GitHub secrets during the deployment process). The database definition/data is not part of the source code.

[<img alt="Website Deployed for Free with FTP Deploy Action" src="https://img.shields.io/badge/Website deployed for free with-FTP DEPLOY ACTION-%3CCOLOR%3E?style=for-the-badge&color=297FA9">](https://github.com/SamKirkland/FTP-Deploy-Action)
# Technologies used

PHP 8.1.0<br>
HTML5/CSS3<br>
MySQL 5.7
