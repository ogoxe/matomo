local_path			:= $(PWD)
matomo_host			:= analytics.dev.bric-network.com

.PHONY: deploy-theme
deploy-theme: ## Construit et déploie le thème sur le VPS
	rsync -av --delete \
		-e "ssh -p 276" \
		$(local_path)/plugins/BricTheme/ \
		deploy@vps1.server.bric-network.com:~/vhosts/$(matomo_host)/plugins/BricTheme/
	@echo "go : https://$(matomo_host)"