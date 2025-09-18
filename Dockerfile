# Use an official Nginx image, 'alpine' is a lightweight version
FROM nginx:alpine

# Set the working directory to the Nginx web root
WORKDIR /usr/share/nginx/html

# Copy the website files (HTML, CSS, JS, assets) to the container's web root
# This assumes your Dockerfile is in the same directory as your website files.
COPY . /usr/share/nginx/html/

# Expose port 80 to allow traffic to the web server
# Render will automatically map its public port to this one.
EXPOSE 80

# The default Nginx command will start the server automatically when the container starts.

