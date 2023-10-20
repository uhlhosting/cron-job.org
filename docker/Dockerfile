# Use a base image with necessary build tools and runtime environments
FROM debian:buster-slim

# Update and install dependencies
RUN apt-get update && apt-get install -y \
    git \
    build-essential \
    cmake \
    libcurl4-openssl-dev \
    libev-dev \
    libmysqlclient-dev \
    libsqlite3-dev \
    libthrift-dev \
    apache2 \
    php \
    # ... any other dependencies ...

    # Clone the repository
    RUN git clone https://github.com/pschlan/cron-job.org.git /app

# Set the working directory
WORKDIR /app

# Build the project
RUN mkdir build && cd build && cmake -DCMAKE_BUILD_TYPE=Release .. && make

# Copy or create scripts to start the services
# COPY start-services.sh /app/start-services.sh

# Set the entry point to start all services
# ENTRYPOINT ["/app/start-services.sh"]
