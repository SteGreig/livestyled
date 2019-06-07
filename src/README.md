# Local Setup

## Requirements
You'll need the following installed on your machine
- NPM
- Gulp
- docsify
- AMPPS <https://www.ampps.com/> or Mamp Pro

## Installing NPM
The quickest way to get NPM on your machine is to install Node JS <https://nodejs.org/en/>.

## Installing Gulp
You can get Gulp from <https://gulpjs.com/>.

## Installing docsify
Once you have NPM install in your terminal run...

```npm i docsify-cli -g```

## AMPPS
The setup was designed to run in AMMPS. AMPPS makes it incredibly easy to set up a local domain with SSL.

All domains are set up as so.
- Production: https://www.domain.com
- Staging: https://staging.domain.com or https://client-project.staging.wearebigrock.com
- Development: https://dev.domain.com

When setting up the local domain in AMPPS make sure you have enabled SSL

## Cloning the repo
Your repo should be cloned to 
```Applications/AMPPS/www/dev.domain.com```

## Run the following commands
Once you've cloned the repo cd into the src directory
``` cd /Applications/AMPPS/www/dev.domain.com/src```

Then run
```npm install```

To view the docs in a web browser run 
```npm run docs```

You'll now be able to see the full docs at <http://localhost:3000/#/>

To compile Scss, JS etc to the theme directory run
```gulp```
