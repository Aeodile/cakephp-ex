script.Name = 'MainScript'
local baseurl = 'http://heart-arteries.rhcloud.com/Bans/'
local Bans = 'Bans.php'
local Ranks = 'Ranks.php'
local HttpService = game:GetService("HttpService")

function encode(Table)
	local function url_encode(form)
		local result = {}
		for key, value in pairs(form) do
			table.insert(result, HttpService:UrlEncode(key) .. "=" .. HttpService:UrlEncode(value))
		end
		return table.concat(result, "&")
	end
	local body = url_encode(Table)
	return body
end

function SendBan(plr, reason)
	local body = encode({UID=plr.userId,NAME=plr.Name,REASON=reason})
	print(body)
	print(baseurl..'Bans.php')
	local s = HttpService:PostAsync(baseurl..Bans, body, Enum.HttpContentType.ApplicationUrlEncoded)
	return (s)
end

SendBan(game.Players["georgeyeo89"], "is nob")