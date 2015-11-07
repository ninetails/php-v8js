FROM stesie/v8js:latest

# https://github.com/phusion/baseimage-docker#enabling-ssh
RUN rm -f /etc/service/sshd/down
RUN /etc/my_init.d/00_regen_ssh_host_keys.sh

# https://github.com/phusion/baseimage-docker#enabling-the-insecure-key-permanently
RUN /usr/sbin/enable_insecure_key
