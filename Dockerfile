FROM nginx:alpine

# Clean default web root
RUN rm -rf /usr/share/nginx/html/*

# Copy website files to container
COPY . /usr/share/nginx/html/

EXPOSE 80
