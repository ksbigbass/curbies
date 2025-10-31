# Use an official Nginx image as a parent image
FROM nginx:alpine

# Set the working directory to Nginx's html directory
WORKDIR /usr/share/nginx/html

# Remove the default Nginx static assets
RUN rm -rf ./*

# Copy the static content (HTML and robots.txt)
COPY index.html .
COPY form-handler.php .
COPY robots.txt /etc/nginx/
COPY sitemap.xml .
COPY /images ./images 

# Expose port 80
EXPOSE 80

# Start Nginx and keep it running in the foreground
CMD ["nginx", "-g", "daemon off;"]