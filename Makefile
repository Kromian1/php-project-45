install:
	composer install
launcher:
	./bin/brain-launcher
games:
	./bin/brain-games
calc:
	./bin/brain-calc
even:
	./bin/brain-even
gcd:
	./bin/brain-gcd
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