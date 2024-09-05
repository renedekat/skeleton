## About Skeleton 

Skeleton project including Behat, Dusk, Reverb and Jetstream + Inertia/Vue + SSR


## Installation and configuration

- Clone the repo
- Create a database of your liking and configure it. Defaults to sqlite.
- `cp .env.example .env`
- `composer install`
- `npm install`
- `php artisan key:generate`
- `php artisan migrate`

Update your .env file for Reverb

- REVERB_APP_ID=
- REVERB_APP_KEY=
- REVERB_APP_SECRET=

On your local machine you might have to set verify_peer for Push to false
REVERB_VERIFY=false

## Testing
Create a .env.testing file if you want. Behat sets the environment to testing.

### Acceptance testing
`./vendor/bin/behat`

### Unit and Feature testing
`php artisan test`

### Front-end testing
`php artisan dusk`

## Usage

Start ssr rendering: `php artisan inertia:start-ssr`<br>
Start the queue worker: `php artisan queue:work`<br>
In a different terminal run `php artisan reverb:start --debug  --host="0.0.0.0" --hostname="skeleton.test"`<br>
In a different terminal run `npm run dev` or `npm run build` if you're not planning on making changes

