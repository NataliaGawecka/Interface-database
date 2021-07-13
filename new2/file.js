
            let parameter=new URLSearchParams(window.location.search)
            if(parameter.get("Alert")==="success"){

                const div =  document.getElementById('we');
                div.parentNode.append(div);
                var q=document.getElementById("x");
                q.parentNode.appendChild(q);
            }
            else{
                const div =  document.getElementById('we');
                div.parentNode.removeChild(div);
                var q=document.getElementById("x");
                q.parentNode.removeChild(q);
            }

