# A simple setup to build php applications

In this setup you already have configurated tests, pre-commit, routes and seo of app.
The routes was build using slim framework that already offer most resources to work and for data persistence was
configured using doctrine query builder.

This setup don't have focus on architecture and then we can say that is a generic repo for project that can become maybe a little large. But depends.

# Start
First you need to install composer on your machine or docker.

If you being used docker run the command bellow:
```bash
docker-compose up -d

# ubuntu

sudo docker-compose up -d
```
If not, you only need to copy the dir to your `htdocs` directory:

## Dependencies
Dependencies that I always used are:
- Pest (test library)
- Slim (for build the routes)
- Doctrine (for data persistence)
- Dotenv (for enviroments)
- Optimization (for build SEO)

And much more micro frameworks