Prerequisites:
- Windows 10
- MongoDB Atlas
- Node.js
- Visual Studio Code
- Cypress.io 10.1.0+
- 2i data generator installed

Instructions: 
With the prequisites properly installed, first open visual studio code.
Import the Github project and within the project folder navigate to the e2e folder.
Access the stage 1 test javascript file.
Next bring the data generator online with the following commands inputted in a comamnd prompt window:
cd data-gen-csv
cd server
npm i
npm run seeds
npm start

Then in a new command prompt terminal:
cd data-gen-csv
cd client
npm i
npm start

To run the stages individually open a terminal tab within visual studio code and enter:
npx cypress open
Select the e2e option and open the testing specs as desired.

To run the tests as a batch open a terminal tab within visual studio code and enter:
npx cypress run
