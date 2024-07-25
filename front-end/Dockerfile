FROM node:lts-alpine

WORKDIR /usr/frontend

RUN npm install -g http-server

COPY ./app/package*.json .

RUN npm i

COPY ./app/ .

EXPOSE 3000

CMD [ "npm", "run", "dev" ]