local_path			:= $(PWD)
matomo_host			:= analytics.dev.bric-network.com


ublock:
	sed -e "s/action_name/_bric/g" matomo.js > bric.js
	sed -i -e "s/idsite/_bric_id/g" bric.js

	sed -e "/include PIWIK_DOCUMENT_ROOT/d" matomo.php > bric.php
	cat bric_vars_redef >> bric.php

.PHONY: deploy-theme
deploy-theme: ## Construit et déploie le thème sur le VPS
	rsync -av --delete \
		-e "ssh -p 276" \
		$(local_path)/plugins/BricTheme/ \
		deploy@vps1.server.bric-network.com:~/vhosts/$(matomo_host)/plugins/BricTheme/
	@echo "go : https://$(matomo_host)"