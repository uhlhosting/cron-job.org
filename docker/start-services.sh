#!/bin/bash

# Start the database
service mysql start

# Start chronos
./build/chronos &

# Start other services (protocol, frontend, statuspage, api)
# ...

# Keep the container running
tail -f /dev/null
