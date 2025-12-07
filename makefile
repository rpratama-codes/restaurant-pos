.PHONY: clean

clean:
	@echo "Stopping containers..."
	docker compose down
	@echo "Removing data volumes..."
	# The minus sign (-) ignores errors if the volume is already deleted
	-docker volume rm restaurant-pos_app-data
	-docker volume rm restaurant-pos_db-data
	-docker volume rm restaurant-pos_grafana-data
	@echo "Cleanup done."