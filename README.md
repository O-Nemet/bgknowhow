# BG Know-How

A website about Hearthstone Battlegrounds, currently hosted at https://bgknowhow.com.<br><br>
The only JavaScript utilized is for the image tooltips, Google Analytics and the Paypal donation button.<br>
Other than that everything is handled by HTML/CSS supported by PHP for dynamic user interaction. There are plans to utilize the Angular framework in the future, to decrease code clutter and increase UI/UX possibilities.

# Installation

There is no fancy build or pipeline setup needed, at the moment. Every push to the main branch will trigger a GitHub action to deploy the main branch to the FTP of the website host. Connections to the MySQL DB and the Blizzard API access is defined in the config directory (overwritten with GitHub secrets during the deployment process). The database definition/data is not part of the source code, yet.

[<img alt="Website Deployed for Free with FTP Deploy Action" src="https://img.shields.io/badge/Website deployed for free with-FTP DEPLOY ACTION-%3CCOLOR%3E?style=for-the-badge&color=297FA9">](https://github.com/SamKirkland/FTP-Deploy-Action)
# Technologies used

PHP 8.0.18<br>
HTML5/CSS3<br>
MySQL 5.7
