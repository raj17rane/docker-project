FROM octava/php7.2-cli
EXPOSE 8000
RUN mkdir /myfiles
COPY index.php /myfiles
WORKDIR /myfiles
CMD ["php", "-S", "0.0.0.0:8000"]