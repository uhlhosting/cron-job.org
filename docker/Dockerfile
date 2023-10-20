# Starting with an Ubuntu base image
FROM ubuntu:latest

# Install dependencies
RUN apt-get update && apt-get install -y build-essential libev-dev libsqlite-dev libmysqlclient-dev \
    libboost-all-dev libssl-dev flex bison pkg-config && \
    apt-get clean && rm -rf /var/lib/apt/lists/*

# Build dependencies
WORKDIR /deps
RUN wget https://curl.haxx.se/download/curl-8.4.0.tar.gz && \
    tar -xzf curl-8.4.0.tar.gz && \
    cd curl-8.4.0 && ./configure --prefix=/usr/local --with-openssl && make && make install && \
    cd .. && wget https://archive.apache.org/dist/thrift/0.19.0/thrift-0.19.0.tar.gz && \
    tar -xzf thrift-0.19.0.tar.gz && \
    cd thrift-0.19.0 && ./configure --prefix=/usr --enable-tests=no --enable-tutorial=no --with-rs=no --with-swift=no --with-dotnetcore=no --with-d=no --with-csharp=no --with-php=no --with-haskell=no --with-erlang=no --with-go=no --with-java=no --with-python=no --with-py3=no --with-ruby=no --with-nodejs=no --with-c_glib=no --with-cpp=yes && make && make install

# Build chronos
WORKDIR /build
RUN mkdir build && cd build && \
    cmake -DCMAKE_INSTALL_PREFIX=/usr/local .. && make
