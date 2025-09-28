install:
	composer install
launcher:
	./bin/launcher
games:
	./bin/games
calc:
	./bin/calc
even:
	./bin/even
gcd:
	./bin/gcd
prime:
	./bin/prime
progression:
	./bin/progression
validate:
	composer validate
lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin
dump:
	composer dump-autoload