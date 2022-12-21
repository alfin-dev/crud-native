pipeline {
    agent any
    stages {
        stage ('Hello') {
            steps {
                echo 'Hello World'
            }
        }
    }
    post {
        always {
            echo "Success gais apapun yang terjadi"
        }
        success {
            echo "Ihiiyy Success"
        }
        failure {
            echo "Gagal"
        }
        cleanup {
            echo "Cleanup"
        }
    }
}